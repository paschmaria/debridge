<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Post;
use App\Models\PostAdmire;
use App\Models\PostHype;
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
        // dd($user);
        $following = $user->following()->with([ 'posts' => function ($query) {
            $query->orderBy('created_at', 'desc')->with([
                'user' => function($q){
                    // $q->with('profile_picture');
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
        $sorted = $timeline->sortByDesc(function ($posts) {
            return $posts->created_at;
        });
        $admired = PostAdmire::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
        $hyped = PostHype::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();

        $posts = $sorted->values()->all();
        // dd($posts);
        return view('users.user_tradeline', compact('user', 'posts', 'admired', 'hyped'));
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
