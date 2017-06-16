<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	public function lga()
	{
		return $this->belongsTo('App\Models\LocalGovt');
	}
    public function state()
    {
    	return $this->belongsTo('App\Models\State');
    }

    public function country()
    {
    	return $this->belongsTo('App\Models\Country');
    }

    public function merchant()
    {
    	return $this->hasOne('App\Models\MerchantAccount');
    }

    public function user_account()
    {
    	return $this->hasOne('App\Models\UserAccount');
    }
}
