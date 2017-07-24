<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\MerchantAccount;

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
        'confirm_code',
        'user_token',
        'registration_status',
        'reference',
        'role_id',
        'community_id',
        'trade_interest_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function full_name()
    {
        return strtoupper($this->first_name . ' ' . $this->last_name);
    }

    public function capFirstName()
    {
        return ucwords($this->first_name . ' ' . $this->last_name);
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function profile_picture()
    {
        return $this->belongsTo('App\Models\Image', 'image_id');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function photo_albums()
    {
        return $this->hasMany('App\Models\PhotoAlbum');
    }

    public function hypes()
    {
        return $this->hasMany('App\Models\PostHype');
    }

    public function productHypes()
    {
        return $this->hasMany('App\Models\ProductHype');
    }

    public function admires()
    {
        return $this->hasMany('App\Models\PostAdmire');
    }

    public function product_admired()
    {
        return $this->hasMany('App\Models\ProductAdmire');
    }
    // accounts relationship
    public function user_account()
    {
        return $this->hasOne('App\Models\UserAccount');
    }

    public function merchant_account()
    {
        return $this->hasOne('App\Models\MerchantAccount');
    }
    //end of accounts relationship

    public function following()
    {
        //pick from pivot table followers where current user is a follower get all user that user follows
        return $this->belongsToMany('App\User', 'followers', 'follower_user_id', 'user_id');
    }

    public function followers()
    {
        //pick from pivot table followers where user is user_id get all follower using follower_user_id
        return $this->belongsToMany('App\User', 'followers', 'user_id', 'follower_user_id');
    }

    public function friends()
    {
        //pick from pivot table friends where current user is user_id get all friends using frined_id
        return $this->belongsToMany('App\User', 'friends', 'user_id', 'friend_id');
    }

    public function sent_requests()
    {
        //pick from pivot table friend_request where current user is the sender get all receipaiant using receiver_id 
        return $this->belongsToMany('App\User', 'friend_requests', 'sender_id', 'receiver_id');
    }

    public function received_requests()
    {
        //pick from pivot table friend_request where current user is the receiver_id get all user received request using sender_id
        return $this->belongsToMany('App\User', 'friend_requests', 'receiver_id', 'sender_id');
    }

    public function socialNotification()
    {
        // get user social notifications
        return $this->hasMany('App\Models\SocialNotification');
    }

    public function productNotifications()
    {
        return $this->belongsToMany('App\Models\ProductNotification', 'product_notification_pivots', 'user_id', 'notification_id');
    }

    public function community()
    {
        return $this->belongsTo('App\Models\TradeCommunity', 'community_id');
    }

    public function bridgeCode()
    {
        return $this->hasOne('App\Models\BridgeCode');
    }

    public function tradeInterest()
    {
        return $this->belongsTo('App\Models\TradeInterest');
    }

    public function notifications()
    {
        return $this->belongsToMany('App\Models\Notification');
    }

    // public function cart()
    // {
    //     return $this->hasOne('App\Models\Cart');
    // }
    public function community_address()
    {
        if($this->community === null){
            return;
        }
        return ucwords($this->community->name . ', ' . $this->community->state->name);
    }

    public function cart_products()
    {
        return $this->belongsToMany('App\Models\Product', 'carts', 'user_id', 'product_id');
    }

    public function checkRole()
    {
        return strtolower($this->role->name) === 'user' ? true : false;
    }

    public function ownsShop($id=null)
    {
        $merchant_ownership = MerchantAccount::where('user_id', $id)->first();
        
        if($merchant_ownership->user_id == auth()->user()->id){
            return true;
        }else{
            return false;

        }

    }

}
