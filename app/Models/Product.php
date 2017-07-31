<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function inventory()
    {
    	return $this->belongsTo('App\Models\Inventory');
    }

    public function category()
    {
    	return $this->belongsTo('App\Models\ProductCategory', 'product_category_id');
    }

    public function product_of_the_week() //product_of_the_week
    {
    	return $this->hasOne('App\Models\ProductOfTheWeek');
    }

    //hottest product relationships
    public function hottest()
    {
        return $this->belongsTo('App\Models\HottestProduct', 'hottest_product_id');
    }

    public function admires()
    {
        return $this->hasMany('App\Models\ProductAdmire');
    }

    public function promo()
    {
        return $this->hasOne('App\Model\ProductPromo');
    }

    public function pictures()
    {
        return $this->belongsTo('App\Models\PhotoAlbum', 'photo_album_id');
    }

    public function notifications()
    {
        return $this->hasMany('App\Models\ProductNotification');
    }

    public function hypes()
    {
        return $this->hasMany('App\Models\ProductHype');
    }

    public function carts()
    {
        return $this->belongsToMany('App\User', 'carts', 'product_id', 'user_id');
    }

    public function user()
    {
        return $this->inventory->merchant->user();
    }
}
