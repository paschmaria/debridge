<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\User;
use App\Models\FriendRequest;
use App\Models\Notification;

class TradeRequestController extends Controller
{

    public function index()
    {
        return view('bridger.trade_request');
    }

    public function create(User $user)
    {
        auth()->user()->sent_trade_requests()->attach($user);
        // notify $user
        $notification = Notification::create([
            'user_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . auth()->user()->getStoreName() .  ' sent you a trade request!',
            ]);
        $notification->users()->attach($user);
        $notification->save();
        // \Session::flash('success', 'Request sent!');
        // return response()->json($reference);
        return back()->with('success', 'Request Sent!');
    }

    public function destroy(User $user)
    {
        auth()->user()->sent_trade_requests()->detach($user);
        $notification = Notification::create([
            'user_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . auth()->user()->getStoreName() .  ' cancelled trade request to you!',
            ]);
        $notification->users()->attach($user);
        $notification->save();
        // notify $user
        // \Session::flash('success', 'Request sent!');
        // return response()->json($reference);
        return back()->with('info', 'Request Cancelled!');
    }

    public function decline(User $user)
    {
        auth()->user()->received_trade_requests()->detach($user);
        $notification = Notification::create([
            'user_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . auth()->user()->getStoreName() .  ' decline trade request from you!',
            ]);
        $notification->users()->attach($user);
        $notification->save();
        // notify $user
        // \Session::flash('success', 'Request sent!');
        // return response()->json($reference);
        return back()->with('info', 'Request declined!');
    }

}
