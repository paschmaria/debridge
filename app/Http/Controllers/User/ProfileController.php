<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MerchantAccount;
use App\Models\UserAccount;
use App\Models\State;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $states = State::all();
        // dd($states);
        if (strtolower(auth()->user()->role->name) == 'user') {

            $user_acc = UserAccount::firstOrCreate(['user_id' => auth()->user()->id]);
        } else {
            $merchant = MerchantAccount::firstOrCreate(['user_id' => auth()->user()->id]);
        }
        return view('users.editprofile', compact('user_acc', 'merchant', 'states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userSave(Request $request)
    {
        
        $user = auth()->user();
        $this->validate($request, [
            'first_name' => 'required|string|max:128',
            'last_name' => 'required|string|max:128',
            'gender' => 'string|max:12',
            'date_of_birth' => 'date',
        ]);
        if (strtolower($request->email) !== auth()->user()->email){
            $this->validate($request, ['email' => 'required|email|unique:users|max:180']);
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->save();

        return back()->with('success', 'Acount updated successfully!');
    }

    public function userAccountSave(Request $request)
    {
        $user = auth()->user();
        $this->validate($request, [
            'telephone' => 'digits_between:5,16',
            'address' => 'nullable|string|max:150',
            'state' => 'digit',
            'status' => 'max:180',
        ]);

        $user_acc = UserAccount::firstOrCreate(['user_id' => auth()->user()->id]);
        $user_acc->telephone = $request->telephone;
        if ($user_acc->address_id == null ) {
            $user_acc->address->create([
                'address' => $request->address, 
                'state_id' => $request->state
                ]);
        } else {
            $user_acc->address->address = $request->address;
            $user_acc->state_id = $request->state;
        }
        $user_acc->save();
    }


    public function merchantAccountSave(Request $request)
    {
        $user = auth()->user();
        $this->validate($request, [
            'telephone' => 'digits_between:5,16',
            'address' => 'nullable|string|max:150',
            'state' => 'digits_between:1,10',
            'status' => 'max:180',
            'store_name' => 'nullable|string|max:128'
        ]);
        
        $merchant = UserAccount::firstOrCreate(['user_id' => auth()->user()->id]);
        $merchant->telephone = $request->telephone;
        $merchant->store_name = $request->store_name;
        if ($merchant->address_id == null ) {
            $merchant->address->create([
                'address' => $request->address, 
                'state_id' => $request->state
                ]);
        } else {
            $merchant->address->address = $request->address;
            $merchant->state_id = $request->state;
        }
        $merchant->save();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePasword(Request $request)
    {
        $user = auth()->user();
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',
            ]);
        if (\Hash::check($request->old_password, $user->password)) {
            $user->password = \Hash::make($request->password);
            $user->save();
            return back()->with('success', 'Password changed successfully!');
        } else {
            return back()->with('delete', 'Wrong password!');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
