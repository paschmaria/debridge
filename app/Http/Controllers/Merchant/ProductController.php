<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\PhotoAlbumController;
use App\Models\ProductCategory;
use App\Models\MerchantAccount;
use App\Models\Inventory;
use App\Models\Product;

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

    public function index()
    {
        //
        
        return view('merchant.merchant');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product_categories = ProductCategory::all();
        return view('merchant.add_product', compact('product_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'product_name'=>'max:20',
            'decription' => 'max:50'
            ]);
        $merchant = new MerchantAccount();
        $merchant->user_id = auth()->user()->id;
        $merchant->save();

        $inventory = new Inventory();
        $inventory->merchant_account_id = $merchant->id;
        $inventory->save();
        // dd($inventory);
        // $product_category_id = $request->input('category');
        $product = new Product();
        $product->name = $request->input('product_name');
        $product->description = $request->input('decription');
        $product->price = $request->input('product_price');
        $product->quantity = $request->input('quantity');
        $product->product_category_id = $request->input('category');
        
        if(!empty($request->file('file'))){
            $album = $this->photo_album->store($request);
            $product->photo_album_id = $album;
        }
        // $product->

        $product->inventory()->associate($inventory);
        $product->save();

        return redirect()->route('merchant')->with('info', 'Product Added Sucessfully');

        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id=null)
    {
        //
        $product_categories = ProductCategory::all();
        $product = Product::find($id);
        // dd($product);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // dd('hi');
        $product = Product::destroy($id);
        return redirect()->route('merchant')->with('info', 'Product Deleted Sucessfully');
    }

    public function viewAllProduct(){
        $products = Product::all();
        // dd($product);
        return view('merchant.products', compact('products'));
    }
}
