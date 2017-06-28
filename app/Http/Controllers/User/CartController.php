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

    public function removeItem(Cart $item)
    {
    	$item->delete();
    	return back()->with('info', 'Item Removed');

    }

    public function clearCart()
    {
    	$item = Cart::where('user_id', auth()->user()->id)->delete();
    	return back()->with('info', 'Cart Cleared');   
    }

    public function viewCart()
    {
    	
    	$items = Cart::where('user_id', auth()->user()->id)->get();
    	// $items->load('products');
    	// dd($items);
    	return view('mycart', compact('items'));
    }
}
