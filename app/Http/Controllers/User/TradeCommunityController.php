<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\TradeCommunity;
use App\Models\Role;
use App\Models\Follower;

class TradeCommunityController extends Controller
{
    public function index(User $user, $filter = null, Request $request)
    {
    	$trade_community = TradeCommunity::where('id', $user->community_id)->first();
    	if ($trade_community) {
    		$users = User::where('community_id', $trade_community->id);
    		
    		$following_ids = [];

    		if(auth()->check()){
    			$following_ids = Follower::where('follower_user_id', auth()->user()->id)->pluck('user_id')->toArray();
    		}

	    	$user_role = Role::where('name', 'User')->pluck('id')->toArray();
	        
	        if (strtolower($filter) == 'merchant') {
	            $users = $users->whereNotIn('role_id', $user_role)->paginate(30);
	        } elseif (strtolower($filter) == 'user') {
	            $users = $users->whereIn('role_id', $user_role)->paginate(30);
	        } else {
	            $users = $users->paginate(30);
	            $filter = '';
	        }

            if ($this->isValidPageNumber($request->page)) {
                return view('bridger.partials.trade_community', compact('users', 'following_ids', 'trade_community'));
            }
	        return view('bridger.trade_community', compact('users', 'following_ids', 'filter', 'trade_community', 'user'));
    	} else {
    		return back()->with('info', "User doesn't belong to any trade community!");
    	}
    	
    }
}
