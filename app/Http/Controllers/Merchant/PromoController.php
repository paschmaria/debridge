<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Notification;

class PromoController extends Controller
{
    public function create(Request $request, $reference){
        $product = Product::where('reference', $reference)->first();
        $product->promo_price = $request->promo_price;
        $product->save();
        
        //notify all mmerchant followers
        $notification = Notification::create([
                'message' => 'Promo: ' . $product->inventory->merchant->user->first_name . ' now sells #' . $product->name . ' at #' . $product->promo_price . ' on promo',
                'product_id'=> $product->id, 
                'user_id' => $product->inventory->merchant->user->id,
            ]);
        $notification->users()->attach(auth()->user()->followers);
        $notification->save();
        
        return back()->with('info', 'Promo Sucessfully Added');
    }

    public function destroy($reference){
        $product = Product::where('reference', $reference)->first();
        $product->promo_price = null;
        $product->save();
        $notification = Notification::create([
                    'message' => 'Notice: ' . $product->inventory->merchant->user->first_name . "'s promo for " . $product->name . ' has ended!',
                    'product_id'=> $product->id, 
                    'user_id' => $product->inventory->merchant->user->id,
                ]);
        $notification->users()->attach(auth()->user()->followers);
        $notification->save();
        return back()->with('info', 'Promo Sucessfully Remove');
    }
}
