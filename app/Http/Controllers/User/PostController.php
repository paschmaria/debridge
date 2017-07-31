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
use App\Http\Requests\PostRequest;

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
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return response()->json($request);
        $this->validate($request, [
            'title' => 'nullable|string|max:128',
            'content' => 'string|max:3000',
        ]);

        if(!empty($request->file('file'))){
            $this->validate($request, [
                'file.*' => 'required|mimes:jpg,jpeg,png,gif'
            ], ['All files must be images (jpg, jpeg, png, gif)']);
        }
        $post = new Post([
            'title' => $request->title,
            'content' => $request->content,
            'reference' => str_random(7) . time() . uniqid(),
            ]);
        //mulitple image upload system
        if(!empty($request->file('file'))){
            $album = $this->photo_album->store($request);
            $post->photo_album_id = $album;
        }
        auth()->user()->posts()->save($post);

        return view('market.partials.post', compact('post'));

        return back()->with('success', 'Post Saved successfully!');
        
        //please nuru fix the json 
        // return response()->json([
        //   'title' => $post->title,
        //   'content'    =>  $post->content,
        //   'reference' => $post->reference,
        // ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // return view('post');
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
    public function destroy(Request $request, $reference)
    {
        //
        $post = Post::where('reference', $reference)->first();
        $post->comments()->delete();
        $post->delete();
        $request->session()->flash('success', 'Post deleted successfully!');
        return back();
    }
}