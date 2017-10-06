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
use App\Models\TradeInterest;
use App\Models\State;
use App\Models\TradeCommunity;
use App\Models\Product;
use App\Models\MerchantAccount;
use App\Models\Inventory;
use App\Models\ProductAdmire;
use App\Models\Post;
use App\Models\PostAdmire;
use App\Models\PostHype;
use Carbon\Carbon;

class UserController extends Controller
{
    
    function __construct(BridgeCodeController $bride_code)
    {
        $this->bride_code = $bride_code;
    	$this->middleware('guest')->except(['logout', 'verifyToken', 'resendActivationMail','market','viewUsers', 'brigeCode', 'profile_picture', 'index', 'arahaMarket', 'merchantTradeline', 'bridger', 'bridgerRequest', 'bridgeShops', 'exhibition', 'followBrands', 'followFriends', 'hiring', 'lagosMarket', 'merchantStore', 'myCart', 'port_harcourtMarket',]);
    }

    public function register()
    {
        $roles = Role::where('name', '!=', 'Admin')->where('name', '!=', 'SuperAdmin')->get();
        $trade_interests = TradeInterest::all();
        // dd($roles);
        $states = State::all();
        $trade_communities = TradeCommunity::all();
        return view('auth.register', compact('roles', 'states', 'trade_communities', 'trade_interests'));
    }

    public function index($filter = null, Request $request){
        $posts = Post::orderBy('created_at', 'desc')->with([
                'user' => function($q){
                    $q->with('profile_picture');
                }, 
                'comments' => function($q){
                    $q->with(['user' => function($q){
                        $q->with('profile_picture');
                    }]);
                },
                'pictures' => function($q){
                    $q->with('images');
                },
                'product', 'admires'
             ]);//->get();   
        if(auth()->check()){
            $admired = PostAdmire::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
            $hyped = PostHype::where(['user_id' => auth()->user()->id])->pluck('post_id')->toArray();
            $user_pic = auth()->user()->profile_picture;
        }
        //on page load from url page is null there intialize the timestamp by with the post is being filtered
        if ( $request->page == null && $request->timestamp == null) {
            $timestamp = Carbon::now();
        } else {
            $timestamp = $request->timestamp;
        }

        $posts = $posts->where('created_at','<=', $timestamp);
        
        // get the user role in the role model...
        $user_role = Role::where('name', 'User')->pluck('id')->toArray();
        // get the ids of all user with the role 'user'
        $user_ids = User::whereIn('role_id', $user_role)->pluck('id')->toArray();

        $products = Product::with(['pictures' => function ($q){
                                    $q->with('images');
                                }
                            ])
                            ->orderBy('views')->limit(6)->get();

        //filter the output based on the filter parameter
        if (strtolower($filter) == 'user') {
            $posts = $posts->whereIn('user_id', $user_ids)->paginate(15);
        } elseif (strtolower($filter) == 'merchant') {
            $posts = $posts->whereNotIn('user_id', $user_ids)->paginate(15);
        } else {
            // for blank and any other type of filter
            $posts = $posts->paginate(15);
        }

        if($this->isValidPageNumber($request->page) && $timestamp){ 
            return view('market.partials.timeline', compact('posts', 'admired', 'hyped', 'timestamp', 'filter')); 
        } else {
            return view('market.index3', compact('posts', 'admired', 'hyped', 'timestamp', 'filter', 'products')); 
        }      
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
            'account_type' => 'required'
            ]);

        // only if the role is that of a merchant
        $merchant_role = Role::where('name', 'Merchant')->pluck('id')->toArray();        
        if (in_array(intval($request->account_type), $merchant_role)){
            $this->validate($request, [ 'trade_interest' => 'required']);
        }
        
        $user_token =  str_random(64);
        
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
            'role_id' => $request->account_type,
            'trade_interest_id' => $request->trade_interest,
            'community_id' => $request->user_trade_community,
            ]);
        
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
     
    public function viewUsers($filter = null, Request $request)
     {
        $users = User::with(['profile_picture'])
                    ->where('id','!=', auth()->user()->id)
                    ->orderBy('first_name');
        // get the id of the users that the auth user follows
        $following_ids = Follower::where('follower_user_id', auth()->user()->id)->pluck('user_id')->toArray();
        

        $user_role = $user_role = Role::where('name', 'User')->pluck('id')->toArray();
        if (strtolower($filter) == 'merchant') {
            $users = $users->whereNotIn('role_id', $user_role)->paginate(30);
        } elseif (strtolower($filter) == 'user') {
            $users = $users->whereIn('role_id', $user_role)->paginate(30);
        } else {
            $users = $users->paginate(30);
            $filter = '';
        }
        // get the id of the users that the auth user sent a friend request
        $sent_request = FriendRequest::where('sender_id', auth()->user()->id)->pluck('receiver_id')->toArray();

        if($this->isValidPageNumber($request->page)){  
            return view('bridger.partials.bridger', compact('users', 'following_ids', 'sent_request', 'filter')); 
        } else {
            return view('bridger.bridger', compact('users', 'following_ids', 'sent_request', 'filter')); 
        }  
        return view('bridger.bridger', compact('users', 'following_ids', 'sent_request', 'filter'));
     }



     public function profile_picture(Request $request, $id){

        $profile_picture = Image::find($id);
            $user_picture = auth()->user();
            $user_picture->image_id = $profile_picture->id;
            $user_picture->save();
            return back()->with('info', 'Profile Picture Updated');
     }

    public function arahaMarket(){
        return view('araha_market');
    }

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
        return view('BridgeShops');
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

}
