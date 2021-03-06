<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Inventory;
use App\Models\MerchantAccount;
use App\Models\Product;
use App\Models\ProductAdmire;
use App\Models\HottestProduct;
use App\Models\ProductOfTheWeek;
use Carbon\Carbon;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
         //get or create merchant acount and of the user 
        $merchant = MerchantAccount::firstOrCreate(['user_id' => $user->id]);
        $inventory = Inventory::firstOrCreate(['merchant_account_id' => $merchant->id]);

        $products = Product::where('inventory_id', $inventory->id)->with([
                            'product_of_the_week', 'hottest', 
                            'admires', 'category', 'pictures' => function ($q){
                                    return $q->with('images');
                                }
                            ])->paginate(16);

        if (auth()->Check()){
            if (auth()->user()->id == $user->id) {

                $hottest = self::checkHottestProductStatus($merchant);

                // get and check product of the week status for the merchant
                $product_of_the_week = ProductOfTheWeek::where('merchant_account_id', $merchant->id)->first();
                $product_of_the_week = self::checkProductOftheWeekStatus($product_of_the_week);
            }
        }

        $admired = ProductAdmire::where(['user_id' => auth()->user()->id])->pluck('product_id')->toArray();
        
        return view('merchant.all_products', compact('products', 'user', 'admired', 'merchant'));
    }

    public static function checkHottestProductStatus($merchant)
    {
        $hot_prod  = HottestProduct::firstOrCreate(['merchant_account_id' => $merchant->id]);
        // intialize interval itime this part is to be reviewed
        if($hot_prod->interval_time == null){
            $hot_prod->interval_time = Carbon::now()->subWeek(2);
        }

        $interval_time = Carbon::createFromFormat('Y-m-d H:i:s', $hot_prod->interval_time);

        $diff_in_days = Carbon::now()->diffInDays($interval_time);
        if(($diff_in_days >= 7)){
            $hot_prod->slots = 0;
            $hot_prod->save();
            $hottest = true;
        } else {
            if((int)$hot_prod->slots < 6){
                if($hot_prod->products()->count() < 6){
                    $hottest = true;
                } else {
                    $hottest = false;
                }
            } else {
                $hottest = false;
            }
        }

        return $hottest;
    }

    public static function checkProductOftheWeekStatus($product_of_the_week)
    {
        if($product_of_the_week != null){
            $diff_in_days = Carbon::now()->diffInDays($product_of_the_week->created_at);
            $product_of_the_week = $diff_in_days > 7;
        } else {
            $product_of_the_week = true;
        }
        return $product_of_the_week;
    }
}
