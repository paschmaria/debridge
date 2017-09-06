<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAdmire extends Model
{
    //
    protected $fillable =['product_id', 'user_id'];

    public function products(){
    	return $this->belongsTo('App\Product');
    }

    public function users(){
		return $this->belongsTo('App\User');
    }
}
