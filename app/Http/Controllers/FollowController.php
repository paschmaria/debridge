<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Follower;
use App\Models\SocialNotification;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $following =  auth()->user()->following;
        $followers =  auth()->user()->followers;
        $following_count =  auth()->user()->following()->count();
        $followers_count =  auth()->user()->followers()->count();
        return view('users.follow', 
            compact('followers', 'following', 'followers_count', 'following_count')
            );
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
    public function store($email)
    {
        // Find the User. Redirect if the User doesn't exist
        $user = User::where('email', $email)->first();
        auth()->user()->following()->attach($user->id);
        // notify $user the he has been followed by auth user
        SocialNotification::create([
            'user_id' => $user->id,
            'foreigner_id' => auth()->user()->id,
            'message' => auth()->user()->first_name . ' is now following you!',
            'description_id' => 1 
            ]);
        return back()->with('success', 'Now follow ' . $user->email);
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
    public function destroy($email)
    {
        // Find the User. Redirect if the User doesn't exist
        $user = User::where('email', $email)->first();
        auth()->user()->following()->detach($user->id);
        //notify $user that he has been unfollowed by auth user
        SocialNotification::create([
            'user_id' => $user->id,
            'foreigner_id' => auth()->user()->id,
            'message' => auth()->user()->first_name . ' unfollowed you!',
            'description_id' => 2 
            ]);
        return back()->with('info', 'unfollowed ' . $email);
    }

}
