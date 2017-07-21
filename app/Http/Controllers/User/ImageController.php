<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // if(!$request->img_ref)){
        //         return response()->json(compact('request'));
        //     }
        $this->validate($request, ['img_ref' => 'required|mimes:jpg,jpeg,png,gif']);
        $filename = "profile-" . auth()->user()->id . '/' . $request->file('img_ref')->getClientOriginalName();
        \Storage::disk('custom')->put($filename, file_get_contents($request->file('img_ref')));
        $image = Image::create(['image_reference' => $filename]);
        auth()->user()->image_id = $image->id;
        auth()->user()->save();

        // return back()->with('success', 'Profile picture update successful!');
        return response()->json(['status' => 'success', 'data' => $image]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($folder, $reference)
    {
        $file = \Storage::disk('custom')->get($folder . '/' . $reference);
        return new Response($file, 200);
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
        $image = Image::where(['id' => $id])->first();
        \Storage::disk('custom')->delete($image->image_reference);
        $image->delete();
        return back()->with('info', 'Image Deleted successfully!');
    }
}
