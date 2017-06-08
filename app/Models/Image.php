<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];
    public function user_profile()
    {
    	return $this->hasOne('App\User');
    }

    public function post()
    {
    	return $this->belongsTo('App\Models\Post');
    }

    public function album()
    {
    	return $this->belongsTo('App\Models\PhotoAlbum');
    }
}
