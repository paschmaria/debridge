<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
	protected $fillable = ['merchant_account_id'];
    public function merchant()
    {
    	return $this->belongsTo('App\Models\MerchantAccount', 'merchant_account_id');
    }

    public function products()
    {
    	return $this->hasMany('App\Models\Product');
    }
}
