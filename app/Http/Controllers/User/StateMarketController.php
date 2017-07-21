<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\Role;
use App\User;
use App\Models\TradeCommunity;
use App\Models\PostAdmire;
use App\Models\PostHype;
use Carbon\Carbon;

class StateMarketController extends Controller
{
    protected function isValidPageNumber($page)
    {
        return $page >= 2 && filter_var($page, FILTER_VALIDATE_INT) !== false;
    }

    public function show($reference, $filter = null, Request $request)
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
		                'product', 'admires'
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
        if(auth()->check()){
            $admired = PostAdmire::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
            $hyped = PostHype::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
        }
    	
        // get the user role in the role model...
        $user_role = Role::where('name', 'user')->pluck('id')->toArray();
        // get the ids of all user with the role 'user'
        $user_ids = User::whereIn('role_id', $user_role)->pluck('id')->toArray();

        //filter the output based on the filter parameter
        if (strtolower($filter) == 'user') {
            $posts = $posts->whereIn('user_id', $user_ids);
        } elseif (strtolower($filter) == 'merchant') {
            $posts = $posts->whereNotIn('user_id', $user_ids);
        } else {
            // for blank and any other type of filter
            //$posts = $posts;
        }

        //on page load from url page is null there intialize the timestamp by with the post is being filtered
        if ( $request->page == null && $request->timestamp == null) {
            $timestamp = Carbon::now();
        } else {
            $timestamp = $request->timestamp;
        }

        $posts = $posts->where('created_at','<=', $timestamp);

        // manual pigination since $posts is not a query builder but a colletion
        if (!$this->isValidPageNumber($request->page)) {
            $posts =  $posts->splice(0,15);
        } else {
            $start =  15 + (((int)$request->page - 2) * 15);
            $end = $start + 15;
            $posts =  $posts->splice($start, $end);
        }

        if($this->isValidPageNumber($request->page) && $timestamp){
            return view('market.partials.timeline', compact('posts', 'admired', 'hyped', 'timestamp', 'filter')); 
        } else {
    	   return view('market.state_market', compact('posts', 'admired', 'hyped', 'state', 'reference', 'timestamp', 'filter'));
        }
    }
}
