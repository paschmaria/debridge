<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = [];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function comments()
    {
    	return $this->hasMany('App\Models\Comment');
    }

   	public function product()
   	{
   		return $this->belongsTo('App\Models\Product');
   	}

   	public function hypes()
   	{
   		return $this->hasMany('App\Models\PostHype');
   	}

   	public function admires()
   	{
   		return $this->hasMany('App\Models\PostAdmire');
   	}

    public function pictures()
    {
      return $this->belongsTo('App\Models\PhotoAlbum', 'photo_album_id');
    }
}
