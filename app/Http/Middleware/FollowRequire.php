<?php

namespace App\Http\Middleware;

use Closure;

class FollowRequire
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()){
            // for follow friend stage and 2 for follow merchant stage
            if (auth()->user()->registration_status == 1){
                return redirect(route('follow_friends'));
            } elseif (auth()->user()->registration_status == 2) {
                return redirect(route('follow_merchants'));
            } else {
                return $next($request);
            }
        }
        return $next($request);
    }
}
