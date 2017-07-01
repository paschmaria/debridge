<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Image;

class AccountController extends Controller
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

    public function index($email)
    {
        //
                $user = User::where('email', $email)->with('profile_picture')->first();

      if($user->image_id!=null){
            $user_picture = $user->image_id;
            $user_picture = Image::find($user_picture);

            $user_picture = $user_picture->image_reference;
            // dd($user_picture);

            return view('users.user_profile', compact('user_picture', 'user'));
        }else{
        return view('users.user_profile', compact('user'));
        $user = User::where('email', $email)->with('profile_picture')->first();

      if(isset($user) && isset($user->image_id)){

            // this is to get the user account and display is picture
            $user_picture1 = $user->image_id;
            $user_picture1 = Image::find($user_picture1);

            $user_picture1 = $user_picture1->image_reference;
            // dd($user_picture);

            return view('users.user_profile', compact('user_picture1', 'user'));
        }else{
        return view('users.user_profile', compact('user', 'user_picture1'));
        }
    
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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

    public function editProfile(){
        return view('edit_profile');
    }
     

}
