<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Image;
use App\Models\Cart;
use App\Models\SocialNotification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);



        view()->composer('*', function($view) {
            if(auth()->check()){
                $item_count = Cart::where('user_id', auth()->user()->id)->get()->count();
                $notifications = SocialNotification::where(['user_id' => auth()->user()->id])->with(['foreigner' => function($q)
                    {
                        return $q->with('profile_picture');
                    }])->get();
                $view->with(['notifications' =>$notifications, 'item_count'=> $item_count]);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
