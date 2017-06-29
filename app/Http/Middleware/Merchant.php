<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
use App\Models\Role;



class Merchant
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
        $arr = [];
        $admin_ids = Role::select('id')->where('name', 'Merchant')->get()->each(function($k) use(&$arr) {
            $arr[] =$k->id;
        });

        if (Auth::user() && in_array(Auth::user()->role_id, $arr)) {
            return $next($request);
        }
        return redirect('/')->with('middleware', 'Please login as a Merchant to continue');
    }
}
