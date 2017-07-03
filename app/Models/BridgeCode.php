<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BridgeCode extends Model
{
	protected $fillable = ['code', 'user_id'];
	
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
