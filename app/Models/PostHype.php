<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostHype extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function post()
    {
    	return $this->belongsTo('App\Models\Post');
    }
}
