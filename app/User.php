<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'date_of_birth',
        'gender',
        'account_type_id',
        'confirm_code',
        'user_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments()
    {
        return $this->hasMany('App/Models/Comment');
    }

    public function posts()
    {
        return $this->hasMany('App/Models/Post');
    }

    public function profile_picture()
    {
        return $this->belongsTo('App/Models/Image');
    }

    public function role()
    {
        return $this->belongsTo('App/Models/Role');
    }
}
