<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeCommunity extends Model
{
    public function state()
    {
    	return $this->belongsTo('App\Models\State');
    }

    public function users()
    {
    	return $this->hasMany('App\User', 'community_id');
    }
}
