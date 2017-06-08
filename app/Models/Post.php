<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function comments()
    {
    	return $this->hasMany('App\Models\Comment');
    }

   	public function images()
   	{
   		return $this->hasMany('App\Models\Image');
   	}
}
