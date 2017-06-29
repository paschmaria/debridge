<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\PhotoAlbum;

class PhotoAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = PhotoAlbum::where(['user_id' => auth()->user()->id ])->with('images')->get();
        //dd($albums);
        return view('upload_image', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd('hello');
        $files = $request->file('file');
        if(!empty($files)){
            $album = PhotoAlbum::create(['user_id' => auth()->user()->id]);
            foreach ($files as $file) {
                $filename = "album-$album->id" . '/' .$file->getClientOriginalName();
                \Storage::disk('custom')->put($filename, file_get_contents($file));
                Image::create(['photo_album_id' => $album->id, 'image_reference' => $filename]);
            }
            return back()->with('success', 'image upload successfully');
        }
        return back()->with('info', 'no image to upload!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = $request->file('file');
        if(!empty($files)){
            $album = PhotoAlbum::create([]);
            foreach ($files as $file) {
                $filename = "album-$album->id" . '/' .$file->getClientOriginalName();
                \Storage::disk('custom')->put($filename, file_get_contents($file));
                Image::create(['photo_album_id' => $album->id, 'image_reference' => $filename]);
            }
            return $album->id;
        }
        return;
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
        $files = $request->file('file');
        if(!empty($files)){
            $album = PhotoAlbum::firstOrCreate(['id' => id ]);
            foreach ($files as $file) {
                $filename = "album-$album->id" . '/' .$file->getClientOriginalName();
                \Storage::disk('custom')->put($filename, file_get_contents($file));
                Image::create(['photo_album_id' => $album->id, 'image_reference' => '/'.$filename]);
            }
            return back()->with('success', 'image upload successfully');
        }
        return back()->with('info', 'no image to upload!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = PhotoAlbum::where(['id' => $id ])->first();
        \Storage::disk('custom')->deleteDirectory("album-$album->id");
        $album->delete();
        return back()->with('info', 'Album deleted!');
    }
}
