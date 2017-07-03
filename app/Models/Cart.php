<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    //


	protected $fillable = ['product_id', 'user_id'];
	
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function product(){
    	return $this->belongsTo('App\Models\Product');
    }
}
