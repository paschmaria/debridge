<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    //

    public function addToCart(Product $product)
    {
    	# code...

    	$item = Cart::create(['product_id' => $product->id, 'user_id'=>auth()->user()->id]);
    	return back()->with('info', 'Item Added to Cart');
    }

    public function removeItem(Product $item)
    {
        $cart = Cart::where(['user_id'=> auth()->user()->id, 'product_id' => $item->id])->first();
    	$cart->delete();
    	return back()->with('info', 'Item Removed');

    }

    public function clearCart()
    {
    	$item = Cart::where('user_id', auth()->user()->id)->delete();
    	return back()->with('info', 'Cart Cleared');   
    }

    public function viewCart()
    {
    	
    	// $items = Cart::where('user_id', auth()->user()->id)->with('product')->get();
        $items = auth()->user()->cart_products;
        // dd($items);
    	return view('mycart', compact('items'));
    }
}
