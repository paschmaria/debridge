<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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


        view()->composer('*', function($view){
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
