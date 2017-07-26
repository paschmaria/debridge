<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductOfTheWeek;
use App\Models\Product;
use App\Models\Notification;

class ProductOfTheWeekController extends Controller
{
    public function create(Request $request, $reference){
        // a user cannot tamper with the product of the week in any way
        $product = Product::where('reference', $reference)->first();
        
        $data = [
        	'product_id' => $product->id, 
        	'merchant_account_id' => auth()->user()->merchant_account->id, 
        	];

        $potw = ProductOfTheWeek::updateOrCreate($data);

        $notification = Notification::create([
                'message' => 'Notice: ' . $product->inventory->merchant->user->full_name() . "'s product of the week is " . $product->name . ' at #' . $product->price,
                'product_id'=> $product->id, 
                'user_id' => auth()->user()->id,
            ]);
        $notification->users()->attach(auth()->user()->followers);
        $notification->save();

        return back()->with('info', 'Product Of The Week Made!');
    }
}
