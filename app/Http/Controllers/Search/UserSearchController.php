<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\MerchantAccount;
use App\Models\Product;

class UserSearchController extends Controller
{
    public function search(Request $request)
    {
        // $search = $request->input('search');
        $results = [];
        $user = User::with('bridgeCode')->where('first_name', 'like', $request->search.'%')
        								->orWhere('last_name', 'like', $request->search.'%')
        								->orWhere('email', 'like', $request->search.'%')->get()
        								->each(function($user) use (&$results){
        									$results[] = [
        										'name' => $user->capFirstName(),
        										'type' => $user->email . ' ' .'(User)',
        										'link' => route('timeline', $user->reference)
        									];
        								});
            
        $products = Product::where('name', 'like', $request->search.'%')->get()
        								->each(function($product) use (&$results){
        									$results[] = [
        										'name' => $product->name,
        										'type' => '(Product)',
        										'link' => route('product_details', $product->reference)
        									];
        								});

        $stores = MerchantAccount::with('user')->where('store_name', 'like', $request->search.'%')->get()
        								->each(function($store) use (&$results){
        									$results[] = [
        										'name' => $store->store_name,
        										'type' => '(Store)',
        										'link' => route('user_store', $stores->user->reference)
        									];
        								});
        $sorted = array_values(array_sort($results, function($value){
            return $value['name'];
        }));
        
        return response()->json([
            'results' => $sorted
        ]);         
    }

}
