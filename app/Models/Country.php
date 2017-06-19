<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function states()
    {
    	return $this->hasMany('App\Models\State');
    }

    public function addresses()
    {
    	return $this->hasMany('App\Models\Address');
    }
}
