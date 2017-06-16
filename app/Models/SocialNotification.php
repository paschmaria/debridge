<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialNotification extends Model
{
	protected $fillable = ['description_id', 'user_id', 'foreigner_id', 'message'];
    public function user()
    {
    	return belongsTo('App\User');
    }

    public function foreigner()
    {
    	return belongsTo('App\User', 'social_notifications', 'foreigner_id');
    }

    public function description()
    {
    	return belongsTo('App\Models\SocialNotificationDescription', 'description_id');
    }
}
