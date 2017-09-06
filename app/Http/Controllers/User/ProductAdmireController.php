<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductAdmire;

class ProductAdmireController extends Controller
{
    //
    public function create(Product $product)
    {

	    $admire = ProductAdmire::where(['product_id' => $product->id, 'user_id' => auth()->user()->id])->first();
        if ($admire) {
            return back()->with('info', 'Product already admired by you!');
        } else {
            ProductAdmire::create(['product_id' => $product->id, 'user_id' => auth()->user()->id]);
        }       
        return back()->with('success', 'Admired!');
    }

    public function destroy(Product $product)
    {
    	$admire = ProductAdmire::where(['product_id' => $product->id, 'user_id' => auth()->user()->id])->first();
        if ($admire) {
            $admire->delete();
        }      
        return back()->with('info', 'Unadmired!');
    }
}
