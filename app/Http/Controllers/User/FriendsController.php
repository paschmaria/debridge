<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\SocialNotification;
use App\Models\FriendRequest;

class FriendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $friends = auth()->user()->friends;
        return view('users.friends', compact('friends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($email)
    {
        //accept friend request
        $auth_user = auth()->user();
        $user = User::where('email', $email)->first();
        $auth_user->friends()->attach($user);
        $user->friends()->attach($auth_user);
        $fr = FriendRequest::where(['sender_id' => $user->id, 'receiver_id' => $auth_user->id])->first();
        $fr->delete();
        // create notification for $user of acceptance
        SocialNotification::create([
            'user_id' => $user->id,
            'foreigner_id' => auth()->user()->id,
            'message' => auth()->user()->first_name . ' accepted your friendship!',
            'description_id' => 3 
            ]);
        return back()->with('success', $user->first_name . ' is now your friend!');
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
    public function update(Request $request, $email)
    {
        $auth_user = auth()->user();
        $user = User::where('email', $email)->first();
        $fr = FriendRequest::where(['sender_id' => $user->id, 'receiver_id' => $auth_user->id])->first();
        $fr->delete();
        // create notification for $user of rejection
        SocialNotification::create([
            'user_id' => $user->id,
            'foreigner_id' => auth()->user()->id,
            'message' => auth()->user()->first_name . ' accepted your friendship!',
            'description_id' => 4 
            ]);

        return response()->json($email);
        
        // return back()->with('info', 'You declined ' . $user->first_name . ' friendship!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($email)
    {
        $auth_user = auth()->user();
        $user = User::where('email', $email)->first();
        $auth_user->friends()->detach($user);
        $user->friends()->detach($auth_user);
        return back()->with('info', 'You unfriended ' . $user->first_name . '!');
    }
}
