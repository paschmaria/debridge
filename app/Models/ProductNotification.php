<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductNotification extends Model
{
    public function users()
    {
    	return $this->belongsToMany('App\User', 'product_notification_pivots', 'notification_id', 'user_id');
    }

    public function description()
    {
    	return $this->belongsTo('App\Models\ProductNotificationDescription', 'description_id');
    }

    public function product()
    {
    	return $this->belongsTo('App\Models\Product');
    }
}
