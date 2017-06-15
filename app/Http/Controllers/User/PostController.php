<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Image;
use Carbon\Carbon;

class PostController extends Controller
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

    public function index()
    {
        $posts = Post::latest()->get();
        return view('post', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'string|max:128',
            'content' => 'string|max:3000',
            // 'image' => 'image:jpg,jpeg,png'
            ]);

        $post = new Post([
            'title' => $request->title,
            'content' => $request->content,
            ]);
        auth()->user()->posts()->save($post);
        if ($request->file('image')){
            $filename = 'post-' . $post->id; //. $request->file('image')->getClientOriginalExtension();
            $store  = \Storage::disk('uploads')->put($filename, $request->file('image'));
            $img = new Image(['image_reference' => $store]);
            $post->images()->save($img);
        }
        // $request->session()->flash('success', 'Post Saved successfully!');
        // return back();
        return response()->json([
          'title' => $post->title,
          'content'    =>  $post->content
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post');
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
    public function destroy(Request $request, $id)
    {
        //
        $post = Post::find($id);
        $post->comments()->delete();
        $post->images()->delete();
        $post = Post::destroy($id);
        $request->session()->flash('success', 'Post deleted successfully!');
        return back();
    }
}