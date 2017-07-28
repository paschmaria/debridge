<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Post;
use App\Models\PostAdmire;
use App\Models\PostHype;
use App\Models\MerchantAccount;
use App\Models\UserAccount;
use App\Models\Role;
use Carbon\Carbon;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        // $this->middleware('auth');
    }

    protected function isValidPageNumber($page)
    {
        return $page >= 2 && filter_var($page, FILTER_VALIDATE_INT) !== false;
    }

    public function index($reference, $filter = null, Request $request)
    {
        $user = User::with(['profile_picture', 'role', 'community', 'bridgeCode'])->where('reference', $reference)->first();
        $following = $user->following()->with([ 'posts' => function ($query) {
            $query->orderBy('created_at', 'desc')->with([
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
                'admires', 'product'
            ]);

        }])->get();
        $timeline = $following->flatMap(function ($values) {
            return $values->posts;
        });
        
        $user_post = Post::where('user_id', $user->id)->with([
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
                'admires', 'product'
            ])->get();
        // dd($user_post);
        $posts = $user_post->merge($timeline->values()->all())->sortByDesc('created_at');
        if (auth()->check()) {
            $admired = PostAdmire::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
            $hyped = PostHype::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
        }

        if ($user->checkRole()) {

            $user_acc = UserAccount::with(['address' => function($q){
                $q->with('state');
            }])->firstOrCreate(['user_id' => $user->id]);
            // dd($user_acc);
        } else {
            $merchant = MerchantAccount::with([
                'address' => function($q){
                    $q->with(['state']);
                },
                'hottest_product' => function($q){
                    $q->with(['products' => function($q){
                        $q->with(['pictures' => function($q){
                            $q->with('images');
                        }]);
                    }]);
                },
                'potw' => function($q){
                    $q->with(['product' => function($q){
                        $q->with(['pictures' => function($q){
                            $q->with('images');
                        }]);
                    }]);
                }
            ])->firstOrCreate(['user_id' => $user->id]);
        }

        // dd($merchant);

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
            return view('users.user_tradeline', compact('user', 'posts', 'admired', 'hyped', 'user_acc', 'merchant', 'timestamp', 'filter'));
        }

    }
}