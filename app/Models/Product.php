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
    	return $this->belongsTo('App\Models\ProductCategory');
    }

    public function product_of_the_week() //product_of_the_week
    {
    	return $this->hasOne('App\Models\ProductOfTheWeek');
    }

    //hottest product relationships
    public function hottest_1()
    {
    	return $this->hasOne('App\Models\HottestProduct', 'product_1_id', 'id');
    }

    public function hottest_2()
    {
    	return $this->hasOne('App\Models\HottestProduct', 'product_2_id', 'id');
    }

    public function hottest_3()
    {
    	return $this->hasOne('App\Models\HottestProduct', 'product_3_id', 'id');
    }

    public function hottest_4()
    {
    	return $this->hasOne('App\Models\HottestProduct', 'product_4_id', 'id');
    }

    public function hottest_5()
    {
    	return $this->hasOne('App\Models\HottestProduct', 'product_5_id', 'id');
    }

    public function hottest_6()
    {
    	return $this->hasOne('App\Models\HottestProduct', 'product_6_id', 'id');
    }

    public function pictures()
    {
        return $this->belongsTo('App\Models\PhotoAlbum');
    }
}
