<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\PhotoAlbumController;
use App\Models\Post;
use App\Models\Image;
use App\Models\PostAdmire;
use App\Models\PostHype;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $photo_album;

    function __construct(PhotoAlbumController $photo_album)
    {
        $this->middleware('auth');
        $this->photo_album = $photo_album;
    }
    
    public function index()
    {
        $posts = Post::latest()->get();
        $admired = PostAdmire::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
        $hyped = PostHype::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
        return view('post', compact('posts', 'admired', 'hyped'));
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
        //mulitple image upload system
        if(!empty($request->file('file'))){
            $album = $this->photo_album->store($request);
            $post->photo_album_id = $album;
        }
        auth()->user()->posts()->save($post);

        return back()->with('success', 'Post Saved successfully!');
        
        //please nuru fix the json 
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