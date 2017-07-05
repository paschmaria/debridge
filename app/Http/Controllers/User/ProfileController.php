<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MerchantAccount;
use App\Models\UserAccount;
use App\Models\State;
use App\Models\Address;
use App\User;

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

    public function show($reference)
    {
        $user = User::where('reference', $reference)->with(['profile_picture', 'role', 'community', 
            'following' => function($q){
                $q->with('profile_picture');
            },
            'followers' => function($q){
                $q->with('profile_picture');
            },
            'photo_albums' => function($q){
                $q->with('images');
            },
            ])->first();
        $following_count = $user->following->count();
        $followers_count = $user->followers->count();
        $following = $user->following->splice(0,3);
        $followers = $user->followers->splice(0,3);
        $photo_albums = $user->photo_albums;

        if (strtolower($user->role->name) == 'user') {

            $user_acc = UserAccount::with(['address' => function($q){
                $q->with('state');
            }])->firstOrCreate(['user_id' => auth()->user()->id]);
            // dd($user_acc);
        } else {
            $merchant = MerchantAccount::with(['address' => function($q){
                $q->with('state');
            }])->firstOrCreate(['user_id' => auth()->user()->id]);
        }
        return view('users.user_profile', compact('user', 'user_acc', 'merchant', 'followers', 'following', 'following_count', 'followers_count', 'photo_albums'));
    }

    public function index()
    {
        $states = State::all();
        // dd($states);
        if (strtolower(auth()->user()->role->name) == 'user') {

            $user_acc = UserAccount::with(['address' => function($q){
                $q->with('state');
            }])->firstOrCreate(['user_id' => auth()->user()->id]);
            // dd($user_acc);
        } else {
            $merchant = MerchantAccount::with(['address' => function($q){
                $q->with('state');
            }])->firstOrCreate(['user_id' => auth()->user()->id]);
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
            'state' => 'digits_between:1,10',
            'status' => 'max:180',
        ]);

        $user_acc = UserAccount::firstOrCreate(['user_id' => auth()->user()->id]);
        $user_acc->telephone = $request->telephone;
        $user_acc->status = $request->status;
        if ($user_acc->address == null ) {
            $address = Address::create([
                'address' => $request->address, 
                'state_id' => $request->state
                ]);
            $user_acc->address_id = $address->id;
        } else {
            $user_acc->address->address = $request->address;
            $user_acc->address->state_id = $request->state;
        }
        $user_acc->save();

        return back()->with('success', 'Information updated successfully!');
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
        
        $merchant = MerchantAccount::firstOrCreate(['user_id' => auth()->user()->id]);
        $merchant->telephone = $request->telephone;
        $merchant->store_name = $request->store_name;
        $merchant->status = $request->status;
        if ($merchant->address == null ) {
            $address = Address::create([
                'address' => $request->address, 
                'state_id' => $request->state
                ]);
            $merchant->address_id = $address->id;
        } else {
            $merchant->address->address = $request->address;
            $merchant->address->state_id = $request->state;
        }
        $merchant->save();

        return back()->with('success', 'Information updated successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
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
            return back()->with('delete_message', 'Incorrect password!');
        }
        //
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
