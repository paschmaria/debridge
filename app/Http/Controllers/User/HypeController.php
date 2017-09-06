<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostHype;
use App\Models\Post;

class HypeController extends Controller
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
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        $created_hype = PostHype::create(['post_id' => $post->id, 'user_id' => auth()->user()->id]);
        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $post->title ,
            'content' => $post->content,
            'photo_album_id' => $post->photo_album_id,
            'reference' => str_random(7) . time() . uniqid(),
            'product_id' => $post->product_id,
        ]);
        return back()->with('success', 'Post Hyped!');
    }
}
