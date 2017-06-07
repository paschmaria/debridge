<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function FunctionName()
    {
    	return $this->hasOne('App\User');
    }

    public function FunctionName()
    {
    	return $this->hasOne('App\Models\Post');
    }
}
