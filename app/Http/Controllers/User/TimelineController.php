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

class TimelineController extends Controller
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

    public function index($reference)
    {
        $user = User::with(['profile_picture', 'role', 'community'])->where('reference', $reference)->first();
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
        
        $admired = PostAdmire::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
        $hyped = PostHype::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();

        if ($user->checkRole()) {

            $user_acc = UserAccount::with(['address' => function($q){
                $q->with('state');
            }])->firstOrCreate(['user_id' => auth()->user()->id]);
            // dd($user_acc);
        } else {
            $merchant = MerchantAccount::with(['address' => function($q){
                $q->with('state');
            }])->firstOrCreate(['user_id' => auth()->user()->id]);
        }
        
        return view('users.user_tradeline', compact('user', 'posts', 'admired', 'hyped', 'user_acc', 'merchant'));

    }