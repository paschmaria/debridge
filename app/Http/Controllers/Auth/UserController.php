<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Mail\Welcome;
use App\Models\Follower;
use App\Models\FriendRequest;

class UserController extends Controller
{
    function __construct()
    {
    	$this->middleware('guest')->except(['logout', 'verifyToken', 'resendActivationMail','market','viewUsers', 'brigeCode']);
    }

    public function register()
    {
        return view('register1');
    }
    
    public function create(Request $request)
    {
        
        $this->validate($request, [
            'first_name' => 'required|alpha|max:180',
            'last_name' => 'required|alpha|max:180',
            'email' => 'required|email|unique:users|max:180',
            'password' => 'required|confirmed|min:6',
            'date_of_birth' => 'date',
            'gender' => 'alpha',
            // 'account_type_id' => 'required|integer',
            ]);
        
        $user_token =  str_random(64);
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'date_of_birth' => $request->date_of_birth,
            // 'gender' => $request->gender,
            // 'account_type_id' => $request->account_type_id,
            'user_token' => $user_token
            ]);
        $user->following()->attach($user);
        

        // \Mail::to($user)->send(new Welcome($user));
        // \Session::flash('success', 'Welcome to Debridge');
        \Auth::login($user);
        return redirect(route('post'))->with('info', 'Welcome, '. $user->email);
    }

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            ]);
        //
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect(route('post'))->with('info', 'Welcome back, '. \Auth::user()->email);
        } else {
            \Session::flash('danger', 'Invalid login credentials!');
            return back()->with('middleware', 'Wrong email or password');
        }
        
    }

    public function logout(Request $request)
    {
    	\Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
    	return redirect('/');
    }

    public function verifyToken($email, $token)
    {
    	$user = User::where(['email' => $email])->first();
    	if ($user->user_token == $token){
    		$user->activated = true;
    		$user->user_token = null;
    		$user->save();
    		\Session::flash('success', 'Your account has been activated');
    		return redirect(route('market'));
    	} else {
    		\Session::flash('danger', 'Invalid token! Try again!');
    		return redirect('/reconfirm');
    	}
    }

    public function resendActivationMail()
     {
     	auth()->user()->forceFill(['user_token' => str_random(64)])->save();
     	Mail::to($user)->send(new Welcome($user));
     	return back();
     }

    public function market()
     {
         return view('market');
     }

    public function viewUsers()
     {
        $users = User::where('id','!=', auth()->user()->id)->get();
        // get the id of the users that the auth user follows
        $following_ids = Follower::where('follower_user_id', auth()->user()->id)->pluck('user_id')->toArray();
        // get the id of the users that the auth user sent a friend request
        $sent_request = FriendRequest::where('sender_id', auth()->user()->id)->pluck('receiver_id')->toArray();
        return view('users.users', compact('users', 'following_ids', 'sent_request'));
     }

     public function brigeCode(Request $request, $id)
     {
        $user = User::find($id);

        $user_id = (string)$user->id;

        $user_id = $user_id[0];

        $random_string = str_random(2);

        $brige_code = 'DB'.$user_id.$random_string;

        dd($brige_code);

     }

    

}
