<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
	protected $fillable = ['user_id', 'message', 'product_id'];
    public function users()
    {
    	return $this->belongsToMany('App\User');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function product()
    {
    	return $this->belongsTo('App\Models\Product');
    }
}
