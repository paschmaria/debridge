<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Socialite;

class SocialController extends Controller
{
	function __construct()
	{
		$this->middleware('guest');
	}

    public function send(Request $request, $provider)
    {
    	return Socialite::with($provider)->redirect();
    }

    public function recieve(Request $request, $provider)
    {
		// try this
		// dd($user);
    	$user = $this->fetchUser(
    		Socialite::driver($provider)->user()
    		// Socialite::with($provider)->stateless()->user()
    		);
    	Auth::login($user);

    	return redirect('/market');
    }

    public function fetchUser($user)
    {
    	$user = User::firstOrNew(['email' => $user->email]);
    	if ($user->exists()){
    		return $user;
    	} else {
    		$user = User::create([
    			'first_name' => $user->first_name,
    			'last_name' => $user->first_name,
    			'email' => $user->email,
    			'first_name' => $user->fisrt_name,
    			'role_id' => 1, //counld be taken out depending on c=final conclusion
    			]);
    		\Session::flash('success', 'Welcome to Debrigde!');
    		return $user;
    	}
    }
}
