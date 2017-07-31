<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Merchant\InventoryController;
use App\Http\Controllers\User\PhotoAlbumController;
use App\Models\ProductCategory;
use App\Models\MerchantAccount;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductOfTheWeek;
use App\Models\HottestProduct;
use App\Models\Notification;
use App\Models\ProductHype;
use App\Models\ProductAdmire;
use App\Models\Post;
use Carbon\Carbon;
use App\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $photo_album;

    public function __construct(PhotoAlbumController $photo_album)
    {
        $this->photo_album = $photo_album;
        //$this->middleware('merchant');
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_categories = ProductCategory::all();
        return view('merchant.addproduct', compact('product_categories'));
    }

    /**
     * create a new product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'string|required|max:120',
            'product_description' => 'string|nullable',
            'price' => 'numeric',
            'category' => 'digits_between:1,20'
            ]);
        if(!empty($request->file('file'))){
            $this->validate($request, [
                'file.*' => 'required|mimes:jpg,jpeg,png,gif'
            ], ['All files must be images (jpg, jpeg, png, gif)']);
        }

        //get or create merchant acount and inventory
        $merchant = MerchantAccount::firstOrCreate(['user_id' => auth()->user()->id]);
        $inventory = Inventory::firstOrCreate(['merchant_account_id' => $merchant->id]);
        
        $product = new Product();
        $product->name = $request->input('product_name');
        $product->description = $request->input('product_description');
        $product->price = $request->input('product_price');

        // get category and associate product to it 
        $category = ProductCategory::where('name', $request->input('category'))->first();
        if ($category != null){
            $product->category()->associate($category);
        }
        $product->reference = str_random(7) . time() . uniqid();
        
        if(!empty($request->file('file'))){
            $album = $this->photo_album->store($request);
            $product->photo_album_id = $album;
        }

        $product->inventory()->associate($inventory);
        $product->save();

        // product notification for followers
        $notification = Notification::create([
                'message' => 'Notice: ' . $product->inventory->merchant->user->full_name() . " now has " . $product->name . ' at ' . $product->price,
                'product_id'=> $product->id, 
                'user_id' => $product->inventory->merchant->user->id,
            ]);
        $notification->users()->attach(auth()->user()->followers);
        $notification->save();

        return back()->with('info', 'Product Added Sucessfully');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($reference)
    {
        $product = Product::with(['category', 'product_of_the_week', 'admires', 'hypes',
                            'pictures' => function($q){
                                return $q->with('images');
                            }])
                            ->where('reference', $reference)->first();

        $user = $product->inventory->merchant->user;
        $merchant = $product->inventory->merchant;
        
        $hottest = InventoryController::checkHottestProductStatus($merchant);
        $product_of_the_week = ProductOfTheWeek::firstOrCreate(['merchant_account_id' => $merchant->id]);
        $product_of_the_week = InventoryController::checkProductOftheWeekStatus($product_of_the_week);

        if(auth()->check()){
            $admired = ProductAdmire::where(['user_id' => auth()->user()->id])->pluck('product_id')->toArray();
            $hyped = ProductHype::where(['user_id' => auth()->user()->id])->pluck('product_id')->toArray();
        }
        $product->views += 2;
        $product->save();

        return view('product_details', compact('product', 'user', 'merchant', 'hottest', 'product_of_the_week', 'admired'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $reference=null)
    {
        //
        $product_categories = ProductCategory::all();
        $product = Product::where('reference', $reference)->first();
        if($request->isMethod('Post')){
            $product->name = $request->input('product_name');
            $product->description = $request->input('decription');
            $product->price = $request->input('product_price');
            $product->quantity = $request->input('quantity');
            $product->product_category_id = $request->input('category');
            $product->save();
            return redirect()->route('merchant')->with('info', 'Product Updated Sucessfully ');
        }else{
            return view('merchant.edit_product', compact('product', 'product_categories'));
        }
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
     * delete product completely from table.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($reference)
    {
        $product = Product::where('reference', $reference)->first();
        if(!$product){
             return back()->with('info', 'Product does not exist!');
        }
        $product->delete();
        return back()->with('info', 'Product Deleted Sucessfully');
    }
}
