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
                if(auth()->check() && isset(auth()->user()->image_id)){
                $user_picture = auth()->user()->image_id;
                $user_picture = Image::find($user_picture);
                $user_picture = $user_picture->image_reference;
                $item_count = Cart::where('user_id', auth()->user()->id)->get()->count();
                
                $view->with(['user_picture' => $user_picture, 'item_count' => $item_count]);
                }

            if(auth()->check()){
                $notifications = SocialNotification::where(['user_id' => auth()->user()->id])->with(['foreigner' => function($q)
                    {
                        return $q->with('profile_picture');
                    }])->get();
                $view->with('notifications', $notifications);
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
