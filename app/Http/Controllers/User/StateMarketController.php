<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\TradeCommunity;
use App\Models\PostAdmire;
use App\Models\PostHype;

class StateMarketController extends Controller
{
    public function show($reference)
    {
    	$state = State::where('name', $reference)->with(['trade_communities' => function ($q){
    		$q->with(['users' => function ($q){
    			$q->with(['posts' => function ($q){
    				$q->orderBy('created_at', 'desc')->with([
		                'user' => function($q){
		                    $q->with('profile_picture');
		                }, 
		                'comments' => function($q){
		                    $q->with(['user' => function($q){
		                        $q->with('profile_picture');
		                    }]);
		                },
		                'pictures' => function($q){
		                    $q->with('images');
		                },
		                'product'
		             ]);
    			}]);
    		}]);
    	}])->first();

    	$users = $state->trade_communities->flatmap(function($q){
    		return $q->users;
    	});

    	$posts = $users->flatmap(function($q){
    		return $q->posts;
    	})->sortByDesc('created_at');
    	// dd($posts);
    	$admired = PostAdmire::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
        $hyped = PostHype::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();

    	return view('market.state_market', compact('posts', 'admired', 'hyped', 'state'));
    }
}
