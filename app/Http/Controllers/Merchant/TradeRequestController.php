<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\User;
use App\Models\FriendRequest;
use App\Models\SocialNotification;

class TradeRequestController extends Controller
{
    //

    public function index()
    {
        return view('friend_request');
    }

    public function showMerchants(){
    	$role = Role::where('name', 'Merchant')->first();
    	$merchants = User::where('role_id', $role->id)->where('id', '!=', auth()->user()->id)->get();
    	$fr = FriendRequest::where('sender_id', auth()->user()->id)->pluck('receiver_id')->toArray();
    	// dd($fr);

    	// dd($merchants);

    	return view('tradeRequest', compact('merchants', 'fr'));
    }

    public function create($reference)
    {
        // create trade request
        $user = User::where('reference', $reference)->first();
        auth()->user()->sent_requests()->attach($user);
        // \Session::flash('success', 'Request sent!');
        // return response()->json($reference);
        return back()->with('info', 'Trade Sent');
    }

    public function cancelRequest($reference)
    {
        $user = User::where('reference', $reference)->first();
        $fr = FriendRequest::where(['sender_id' => auth()->user()->id, 'receiver_id' => $user->id]);
        $fr->delete();
        $user = User::where('reference', $reference)->first();
        $auth_user = auth()->user();
        $auth_user->friends()->detach($user);
        // return response()->json($reference);

        return back()->with('info', 'Request cancelled');
    }

    public function acceptRequest($reference)
    {
        //accept friend request
        $auth_user = auth()->user();
        $user = User::where('reference', $reference)->first();
        $auth_user->friends()->attach($user);
        $user->friends()->attach($auth_user);
        $fr = FriendRequest::where(['sender_id' => $user->id, 'receiver_id' => $auth_user->id])->first();
        $fr->delete();
        // create notification for $user of acceptance
        SocialNotification::create([
            'user_id' => $user->id,
            'foreigner_id' => auth()->user()->id,
            'message' => auth()->user()->first_name . ' accepted your trade request!',
            'description_id' => 3 
            ]);
        return back()->with('success', $user->first_name . ' is now trading with you!');
    }

    public function declineRequest(Request $request, $reference)
    {
        $auth_user = auth()->user();
        $user = User::where('reference', $reference)->first();
        $fr = FriendRequest::where(['sender_id' => $user->id, 'receiver_id' => $auth_user->id])->first();
        $fr->delete();
        // create notification for $user of rejection
        SocialNotification::create([
            'user_id' => $user->id,
            'foreigner_id' => auth()->user()->id,
            'message' => auth()->user()->first_name . ' accepted your trade_request!',
            'description_id' => 4 
            ]);

        return response()->json($reference);
        
        // return back()->with('info', 'You declined ' . $user->first_name . ' friendship!');
    }

    public function destroy($reference)
    {
        $auth_user = auth()->user();
        $user = User::where('reference', $reference)->first();
        $auth_user->friends()->detach($user);
        $user->friends()->detach($auth_user);
        return back()->with('info', 'You cancelled trade ' . $user->first_name . '!');
    }



}
