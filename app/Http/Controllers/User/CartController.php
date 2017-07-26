<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart($reference)
    {
        $product = Product::where('reference', $reference)->first();
        if ($product) {
                $cart = Cart::where(['product_id' => $product->id, 'user_id' => auth()->user()->id])->first();
                if ( $cart ){
                    return back()->with('info', 'item already in  your cart!');
                }
                $item = Cart::create(['product_id' => $product->id, 'user_id' => auth()->user()->id]);
                return back()->with('success', 'Item Added to Cart');
        } else {
            return back()->with('info', 'product no longer exist!');
        }
    }

    public function removeItem($reference)
    {
        $product = Product::where('reference', $reference)->first();
        $cart = Cart::where(['user_id'=> auth()->user()->id, 'product_id' => $product->id])->first();
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
    	$items = auth()->user()->cart_products;
        $products = Product::inRandomOrder()->limit(10)->get();
        return view('mycart', compact('items', 'products'));
    }
}
