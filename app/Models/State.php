<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function country()
    {
    	return $this->belongsTo('App\Models\Country');
    }

    public function trade_communities()
    {
    	return $this->hasMany('App\Models\State');
    }

    public function addresses()
    {
    	return $this->hasMany('App\Models\Address');
    }
}
