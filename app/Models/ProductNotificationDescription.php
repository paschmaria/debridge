<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductNotificationDescription extends Model
{
    public function notifications()
    {
    	return $this->hasMany('App\Models\ProductNotification', 'description_id');
    }
}
