<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Post;
use App\Models\PostAdmire;
use App\Models\PostHype;

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
        $user = User::with(['profile_picture', 'role'])->where('reference', $reference)->first();
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
            ]);

        }])->get();
        $timeline = $following->flatMap(function ($values) {
            return $values->posts;
        });
        
        $user_post = Post::where('user_id', $user->id)->get();
        $posts = $user_post->merge($timeline->values()->all())->sortByDesc('created_at');
        
        $admired = PostAdmire::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
        $hyped = PostHype::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
        // dd($posts);

        // dd($user->role()->first());


        $role = Role::where('name', 'Merchant')->first()->name;
        
        if(isset($user->role_id) && $user->role()->first()->name === $role){
            return view('merchant_tradeline', compact('posts', 'admired', 'hyped', 'user'));

        }else{
            return view('users.user_tradeline', compact('posts', 'admired', 'hyped', 'user'));
        }
        return view('users.user_tradeline', compact('user', 'posts', 'admired', 'hyped', 'user'));

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
    public function destroy($id)
    {
        //
    }
}
