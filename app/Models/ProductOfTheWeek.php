<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOfTheWeek extends Model
{
	protected $fillable = ['merchant_account_id', 'product_id', 'updated_at'];

    public function merchant()
    {
    	return $this->belongsTo('App\Models\MerchantAccount');
    }

    public function product()
    {
    	return $this->belongsTo('App\Models\Product');
    }
}
