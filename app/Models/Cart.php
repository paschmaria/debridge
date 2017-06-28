<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

	protected $fillable = ['product_id', 'user_id'];
	
    public function bridgeCode()
    {
        return $this->hasOne('App\Models\BridgeCode');
    }

    public function products(){
    	return $this->hasMany('App\Models\Product');
    }
}
