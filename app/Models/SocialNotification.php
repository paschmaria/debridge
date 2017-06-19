<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialNotification extends Model
{
	protected $fillable = ['description_id', 'user_id', 'foreigner_id', 'message'];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function foreigner()
    {
    	return $this->belongsTo('App\User', 'foreigner_id');
    }

    public function description()
    {
    	return $this->belongsTo('App\Models\SocialNotificationDescription', 'description_id');
    }
}
