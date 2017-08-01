<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
class CommentController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {
        $this->validate($request, ['content' => 'required|string|max:255']);
        $comment = Comment::create([
            'content' => $request->content,
            'user_id' => auth()->user()->id,
            'post_id' => $post->id
            ]);
        // return response()->json([
        //     'success' => $comment
        // ]);    
        $request->session()->flash('success', 'Comment succesful');
        return back();
    }



    /**
     * Remove the specified resource from the comment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Comment::destroy($id);
        return back()->with('success', 'Comment deleted successfully!');
    }
}