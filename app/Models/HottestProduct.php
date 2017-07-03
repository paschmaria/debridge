<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HottestProduct extends Model
{
    protected $fillable = ['merchant_account_id'];
    public function merchant()
    {
    	return $this->belongsTo('App\Models\MerchantAccount');
    }

    public function product_1()
    {
    	return $this->belongsTo('App\Models\Product', 'product_1_id');
    }

    public function product_2()
    {
    	return $this->belongsTo('App\Models\Product', 'product_2_id');
    }

    public function product_3()
    {
    	return $this->belongsTo('App\Models\Product', 'product_3_id');
    }

    public function product_4()
    {
    	return $this->belongsTo('App\Models\Product', 'product_4_id');
    }

    public function product_5()
    {
    	return $this->belongsTo('App\Models\Product', 'product_5_id');
    }

    public function product_6()
    {
    	return $this->belongsTo('App\Models\Product', 'product_6_id');
    }
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
