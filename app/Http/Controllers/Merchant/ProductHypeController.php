<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductHype;

class ProductHypeController extends Controller
{
    public function create($reference, Request $request){
       $product = Product::where('reference', $reference)->first();
       $hype = ProductHype::where(['product_id' => $product->id, 'user_id' => auth()->user()->id])->first();
        if ($hype) {
            return back()->with('info', 'Product already hyped by you!');
        } else {
            $created_hype = ProductHype::create(['product_id' => $product->id, 'user_id' => auth()->user()->id]);

            Post::create([
                'user_id' => auth()->user()->id,
                'title' => $request->input('title'),
                'content' => $product->description,
                'photo_album_id' => $product->photo_album_id,
                'product_id' => $product->id,
                'reference' => str_random(7) . time() . uniqid(),
            ]);
        }       
    
    	return back()->with('success', 'Product Hyped!');
    }
}
