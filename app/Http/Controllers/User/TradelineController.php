<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\MerchantAccount;

class TradelineController extends Controller
{
    //
    public function index($reference){
		$users = User::where('reference', $reference)->first()->following;
		// dd($user);
		$auth_following_id = auth()->user()->following->pluck('id')->toArray();
        // dd($auth);
        $merchants = MerchantAccount::whereIn('user_id', $auth_following_id)->with(['inventory' => function($q){
            $q->with('products');
        }])->get();

        $merchants = MerchantAccount::whereIn('user_id', $auth_following_id)->get();
    
        $inventories = $merchants->map(function($q){
            return $q->inventory;
        });

        $products = $inventories->flatMap(function($q){
            if($q != null){
                return $q->products;
            }
        });
        // dd($products);
		return view('tradeline', compact('products', 'merchants'));
    }
}
