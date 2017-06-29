<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPromo extends Model
{
	protected $fillable = ['product_id', 'start_date', 'end_date']
    public function product()
    {
    	return $this->belongsTo('App\Model\Product');
    }
}
