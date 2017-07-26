<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\HottestProduct;
use App\Models\MerchantAccount;
use App\Models\Notification;
use App\User;
use Carbon\Carbon;

class HottestProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->middleware('merchant')
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create($reference)
    {
        $product = Product::where('reference', $reference)->first();
        $hot_prod  = HottestProduct::firstOrCreate(['merchant_account_id' => auth()->user()->merchant_account->id]);
        if($hot_prod->interval_time == null){
            $hot_prod->interval_time = Carbon::now()->subWeek(2);
        }
        $interval_time = Carbon::createFromFormat('Y-m-d H:i:s', $hot_prod->interval_time);
        $diff_in_days = Carbon::now()->diffInDays($interval_time);
        if($diff_in_days >= 7){
            $hot_prod->interval_time = Carbon::now();
        }
        if ($hot_prod->slots <= 6) {
            if ( $hot_prod->products()->count() >= 6 ) {
                return back()->with('info', 'please remove some of your current product to add a new item on hottest deal you still have ' . 6 - $hot_prod->slots . ' slots' );
            }
            $product->hottest()->associate($hot_prod);
            $hot_prod->slots += 1;
            $hot_prod->save();
            $product->save();

            if ($hot_prod->slots == 6){
                $notification = Notification::create([
                        'message' => 'Notice: you have used up all your hottest product slots. you get more by' . Carbon::createFromFormat('Y-m-d H:i:s', $hot_prod->interval_time)->subWeek(-1),
                        'user_id' => auth()->user()->id,
                    ]);
                $notification->users()->attach(auth()->user());
            }

            return back()->with('success', 'Product was successfully added!');
        } else{
            return back()->with('info', 'You exhausted you available slots!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\http_date()p\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($reference)
    {
        $user = User::where('reference', $reference)->first();
        $merchant = MerchantAccount::firstOrCreate(['user_id' => $user->id]);
        $hottest = HottestProduct::firstOrCreate(['merchant_account_id' => $merchant->id]);
        $products = Product::where('hottest_product_id', $hottest->id)
                            ->with([ 'product_of_the_week', 'hottest', 
                            'admires', 'category', 'pictures' => function ($q){
                                    return $q->with('images');
                                }
                            ])->paginate(8);

        return view('merchant.hottest_products', compact('products', 'user', 'merchant', 'admired'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($reference)
    {
        $slot =  6 - auth()->user()->merchant_account->hottest_product->slot;
        if(auth()->user()->merchant_account->hottest_product->count() + $slot > 7) {
            return back()->with('info', 'you do not have enough slots to perform this action');
        }
        $product = Product::where('reference', $reference)->first();
        $hot_prod  = auth()->user()->merchant_account->hottest_product;
        $product->hottest()->dissociate();
        $product->save();
        return back()->with('info', $product->name . ' remove from hottest items!');
    }
}
