<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BridgeCode;

class BridgeCodeController extends Controller
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
        while(true){
            $user_id = (string)auth()->user()->id;
            $user_id = $user_id[0];
            $random_string = str_random(2);
            $brige_code = 'DB' . $user_id . $random_string;
            $code = BridgeCode::where('code', $brige_code)->first();
            if (empty($code)){
                return $brige_code;
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store()
    // {
    //     $code = $this->create();
    //     $brige_code = BridgeCode::create(['code' => $code, 'user_id' => auth()->user()->id ]);
    //     return true;
    // }

    public function store()
    {
        $code = $this->create();
        $brige_code = BridgeCode::create(['code' => $code, 'user_id' => auth()->user()->id ]);
        return true;
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
