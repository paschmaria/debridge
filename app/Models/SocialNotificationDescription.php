<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialNotificationDescription extends Model
{
    public function notification()
    {
    	return $this->hasMany('App\SocialNotification', 'description_id', 'id');
    }
}
