<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\BridgeCodeController;
use App\User;
use App\Mail\Welcome;
use App\Models\Follower;
use App\Models\FriendRequest;
use App\Models\SocialNotification;
use App\Models\Image;
use App\Models\Role;
use App\Models\State;
use App\Models\TradeCommunity;
use App\Models\Product;
use App\Models\MerchantAccount;
use App\Models\Inventory;

class UserController extends Controller
{
    
    function __construct(BridgeCodeController $bride_code)
    {
        $this->bride_code = $bride_code;
    	$this->middleware('guest')->except(['logout', 'verifyToken', 'resendActivationMail','market','viewUsers', 'brigeCode', 'profile_picture', 'index', 'arahaMarket', 'merchantTradeline', 'bridger', 'bridgerRequest', 'bridgeShops', 'exhibition', 'followBrands', 'followFriends', 'hiring', 'lagosMarket', 'merchantStore', 'myCart', 'port_harcourtMarket', 'userTradeline',]);
    }

    public function register()
    {
        $roles = Role::where('name', '!=', 'Admin')->get();
        // dd($roles);
        $states = State::all();
        $trade_communities = TradeCommunity::all();
        return view('register1', compact('roles', 'states', 'trade_communities'));
    }

    public function index(){
        // $auth_following_id = auth()->user()->following->pluck('id')->toArray();
        // // dd($auth);
        // $merchants = MerchantAccount::whereIn('user_id', $auth_following_id)->with(['inventory' => function($q){
        //     $q->with('products');
        // }])->get();
    
        // $inventories = $merchants->map(function($q){
        //     return $q->inventory;
        // });

        // $products = $inventories->flatMap(function($q){
        //     if($q != null){
        //         return $q->products;
        //     }
        // });
        // dd($products);
        return view('index');
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
            
            ]);
        
        $user_token =  str_random(64);
        $role = Role::where('name', $request->input('trade_interest'))->first();
        $trade_community = TradeCommunity::where('name', $request->input('trade_community'))->first();

        // $state = State::where('name', $request->input('state'))->first();
        // dd($request->all());
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'date_of_birth' => $request->date_of_birth,
            'user_token' => $user_token,
            'gender' => $request->gender,
            'reference' => str_random(7) . time() . uniqid(),
            'registration_status' => 1,
            'role_id' => $request->user_trade_interest,
            'community_id' => $request->user_trade_community,

            ]);
        // dd($user);

        // if($role === Role::where('name', 'Merchant')->first()){
            
        //     $user->role()->associate($role);
        //     $user->save();
        // }
        // $user->community()->associate($trade_community);
        // $user->save();
        // user follows himself so he can see his won post on his timeline
        // $user->following()->attach($user);
        

        // \Mail::to($user)->send(new Welcome($user));
        // \Session::flash('success', 'Welcome to Debridge');
        \Auth::login($user);
        //generate  debride code for user
        $this->bride_code->store();
        return redirect(route('follow_friends'))->with('info', 'Welcome, '. $user->full_name());
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
            return redirect('/')->with('success', 'Welcome back, '. \Auth::user()->email);
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
     
    public function viewUsers()
     {
        $users = User::where('id','!=', auth()->user()->id)->get();
        // get the id of the users that the auth user follows
        $following_ids = Follower::where('follower_user_id', auth()->user()->id)->pluck('user_id')->toArray();
        // get the id of the users that the auth user sent a friend request
        $sent_request = FriendRequest::where('sender_id', auth()->user()->id)->pluck('receiver_id')->toArray();
        return view('bridger', compact('users', 'following_ids', 'sent_request'));
     }

     public function profile_picture(Request $request, $id){

        $profile_picture = Image::find($id);
        // dd($profile_picture);

        // if($request->isMethod('post')){
            // dd('ji');
            $user_picture = auth()->user();
            $user_picture->image_id = $profile_picture->id;
            $user_picture->save();
            return back()->with('info', 'Profile Picture Updated');
        // }
     }

    public function arahaMarket(){
        return view('araha_market');
    }

    // public function merchantTradeline(User $user){
    //     $role = Role::where('name', 'Merchant')->first()->name;
    //     // dd($role);
    //     if(isset($user->role_id) && $user->role()->first()->name === $role){
    //         return view('merchant_tradeline');
    //     }else{
    //         return redirect()->route('timeline', $user->id) ;
    //     }
    // }

     public function merchantTimeline(){
        return view('merchant_timeline');
    }

    public function bridger(){
        return view('bridger');
    }

    public function bridgeRequest(){
        return view('bridgerRequest');
    }

    public function bridgeShops(){
        return view('bridgeShops');
    }

    public function exhibition(){
        return view('exhibition_stand');
    }

    public function followBrands(){
        return view('follow_brands');
    }

    public function followFriends(){
        return view('follow_friends');
    }

    public function hiring(){
        return view('hiring');
    }

    public function lagosMarket(){
        return view('lagos_market');
    }

    public function port_harcourtMarket(){
        return view('port-harcourt_market');
    }

    public function merchantStore(){
        return view('m-store');
    }

    public function myCart(){
        return view('mycart');
    }

    public function userTradeline(){
        $products = Product::latest()->get();
        $inventory = Inventory::all();
        $merchant = MerchantAccount::all();
        $user = User::all();
        // dd($product);
        
        return view('user_tradeline', compact('products', 'inventory', 'merchant', 'user'));
      
        
        
    }

    

}
