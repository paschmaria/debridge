<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchantAccount extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function inventory()
    {
        return $this->hasOne('App\Models\Inventory');
    }

    public function address()
    {
    	return $this->belongsTo('App\Models\Address');
    }

    public function potw()	//product_of_the_week
    {
    	return $this->hasOne('App\Models\ProductOfTheWeek');
    }
}
