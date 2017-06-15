<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public function merchant()
    {
    	return $this->belongsTo('App\Models\MerchantAccount');
    }

    public function products()
    {
    	return $this->hasMany('App\Models\Product');
    }
}
