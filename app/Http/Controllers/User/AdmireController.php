<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostAdmire;
use App\Models\Post;

class AdmireController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($reference)
    {
        $post = Post::with('admires')->where('reference', $reference)->first();
        $admire = PostAdmire::where(['post_id' => $post->id, 'user_id' => \Auth::user()->id])->first();
        if ($admire) {
            return back()->with('info', 'Post already admired by you!');
        } else {
            PostAdmire::create(['post_id' => $post->id, 'user_id' => \Auth::user()->id]);
        }  
        return view('market.partials.buttons.unadmire', compact('post'));  
        // return response()->json([
        //     'count' => $post->admires->count() 
        //     ]);   
        // return back()->with('success', 'Admired!');
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
    public function destroy($reference)
    {
        $post = Post::with('admires')->where('reference', $reference)->first();
        $admire = PostAdmire::where(['post_id' => $post->id, 'user_id' => \Auth::user()->id])->first();
        if ($admire) {
            $admire->delete();
        }
        return view('market.partials.buttons.admire', compact('post'));
        // return response()->json([
        //     'count' => $post->admires->count() 
        //     ]);      
        // return back()->with('info', 'Unadmired!');
    }
}
