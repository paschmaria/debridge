<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Image;

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
                // dd($user_picture);
                
                $view->with('user_picture', $user_picture);
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
