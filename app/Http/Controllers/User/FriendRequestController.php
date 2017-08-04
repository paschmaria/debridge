<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\FriendRequest;
use App\Models\Notification;

class FriendRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bridger.friend_request');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, Request $request)
    {
        // create friend request
        auth()->user()->sent_requests()->attach($user);

        $notification = Notification::create([
            'user_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . ' has sent you a friend request!',
            ]);
        $notification->users()->attach($user);
        $notification->save();
        // return response()->json($email);
        if($request->ajax()){
            return response()->json(['user' => $user->reference]);
        }
        return back()->with('success', 'request sent!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function decline(User $user, Request $request)
    {
        auth()->user()->received_requests()->detach($user);

        $notification = Notification::create([
            'user_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . ' has decline your frined request!',
            ]);
        $notification->users()->attach($user);
        $notification->save();

        // return response()->json($email);
        if($request->ajax()){
            return response()->json(['user' => $user->reference]);
        }

        return back()->with('info', 'Request cancelled');
    }

    public function destroy(User $user, Request $request)
    {
        auth()->user()->sent_requests()->detach($user);

        $notification = Notification::create([
            'user_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . ' has withdrawn the frined request!',
            ]);
        $notification->users()->attach($user);
        $notification->save();

        if($request->ajax()){
            return response()->json(['user' => $user->reference]);
        }

        // return response()->json($email);

        return back()->with('info', 'Request cancelled');
    }
}
