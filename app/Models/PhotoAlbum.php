<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoAlbum extends Model
{
	protected $guarded = [];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function images()
    {
    	return $this->hasMany('App\Models\Image');
    }

    public function product()
    {
    	return $this->hasOne('App\Models\Product');
    }
}
