<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class TradeCommunityController extends Controller
{
    public function show()
    {
    	$post::where('product_id', '!=', null)->get();
    }
}
