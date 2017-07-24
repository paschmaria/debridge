<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Role;
use App\Models\Follower;
use App\Models\State;
use App\Models\SocialNotification;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('auth');
    }

    public function show($reference)
    {
        $user = User::where('reference', $reference)->with([
            'profile_picture', 
            ])->first();
    }

    public function index()
    {
        $following =  auth()->user()->following->where('id', '!=', auth()->user()->id);
        $followers =  auth()->user()->followers->where('id', '!=', auth()->user()->id);
        $following_count =  count($following);
        $followers_count =  count($followers);
        $following_ids = Follower::where('follower_user_id', auth()->user()->id)->pluck('user_id')->toArray();
        // dd($following_ids);
        return view('users.bridger', 
            compact('followers', 'following', 'followers_count', 'following_count', 'following_ids')
            );
    }

    protected function isValidPageNumber($page)
    {
        return $page >= 2 && filter_var($page, FILTER_VALIDATE_INT) !== false;
    }

    public function following(Request $request, $reference, $filter = null)
    {
        $user = User::where('reference', $reference)->with(['following' => function ($q){
            $q->with(['profile_picture', 'role']);
        }])->first();

        $following_count = count($user->following);

        $user_role = Role::where('name', 'User')->pluck('id')->toArray();
          
        if (strtolower($filter) == 'merchant') {
            $following = $user->following->whereNotIn('role_id', $user_role)
                              ->sortBy('first_name')->sortBy('last_name');
        } elseif (strtolower($filter) == 'user') {
            $following = $user->following->whereIn('role_id', $user_role)
                              ->sortBy('first_name')->sortBy('last_name');
        } else {
            $following = $user->following->sortBy('first_name')->sortBy('last_name');
            $filter = '';
        }

        // manual pigination since $following is not a query builder but a colletion
        if (!$this->isValidPageNumber($request->page)) {
            $following =  $following->splice(0,20);
        } else {
            $start =  20 + (((int)$request->page - 2) * 20);
            $end = $start + 20;
            $following =  $following->sortBy('name')->splice($start, $end);

            return view('users.partials.following_bridger', 
            compact('user', 'following', 'following_ids', 'filter')
            );
        }
        return view('users.following_bridger', 
            compact('user', 'following', 'following_count', 'following_ids', 'filter')
            );
    }

    public function followers(Request $request, $reference, $filter = null)
    {
        $user = User::where('reference', $reference)->with(['following' => function ($q){
            $q->with('profile_picture');
        }])->first();


        $followers_count =  count($user->followers);

        $user_role = Role::where('name', 'User')->pluck('id')->toArray();
          
        if (strtolower($filter) == 'merchant') {
            $followers = $user->followers->whereNotIn('role_id', $user_role)
                              ->sortBy('first_name')->sortBy('last_name');
        } elseif (strtolower($filter) == 'user') {
            $followers = $user->followers->whereIn('role_id', $user_role)
                              ->sortBy('first_name')->sortBy('last_name');
        } else {
            $followers = $user->followers->sortBy('first_name')->sortBy('last_name');
            $filter = '';
        }

        if (!$this->isValidPageNumber($request->page)) {
            $followers = $followers->sortBy('first_name')->splice(0,20);
        } else {
            $start =  20 + (((int)$request->page - 2) * 10);
            $end = $start + 10;
            $followers =  $followers->sortBy('name')->splice($start, $end);

            return view('users.partials.followers_bridger', 
            compact('user', 'followers', 'followers_ids', 'filter')
            );
        }

        $following_ids = Follower::where('follower_user_id', auth()->user()->id)->pluck('user_id')->toArray();
        return view('users.followers_bridger', 
            compact('user', 'followers', 'followers_count', 'following_ids', 'filter')
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($reference)
    {
        $role_user = Role::where('name', 'User')->get();
        $role_merchant = Role::where('name', 'Merchant')->get();
        // Find the User. Redirect if the User doesn't exist
        $user = User::where('reference', $reference)->first();
        auth()->user()->following()->attach($user->id);
        // notify $user the he has been followed by auth user
        SocialNotification::create([
            'user_id' => $user->id,
            'foreigner_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . ' is now following you!',
            'description_id' => 1 
            ]);
        $num_of_user = count(auth()->user()->following()->whereIn('role_id', $role_user)->get());
        $num_of_merchant = count(auth()->user()->following()->whereIn('role_id', $role_merchant)->get());
         return response()->json([
          'reference' => $user->reference,
          'user_count'    =>  $num_of_user,
          'merchant_count' => $num_of_merchant
        ]);
        // return response()->json($user->reference]);
        // return back()->with('success', 'Now following ' . $user->email);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUser(Request $request)
    {
        // get the id of the users that the auth user follows
        $num_of_user = $num_of_merchant = 0;
        $following_ids = Follower::where('follower_user_id', auth()->user()->id)->pluck('user_id')->toArray();
        $role_id = Role::where('name', 'User')->pluck('id')->toArray();
        $users = User::with(['profile_picture', 'community' ])->where('id', '!=', auth()->user()->id)->whereIn('role_id', $role_id)->paginate(16);
        return view('users.follow_friends', compact('users', 'following_ids', 'num_of_merchant', 'num_of_user'));
    }

    public function friendsFollowComplete()
    {
        auth()->user()->registration_status = 2;
        auth()->user()->save();
        return redirect(route('follow_merchants'));
    }

    public function getMerchant(Request $request)
    {
        // dd(auth()->user()->email);
        // get the id of the users that the auth user follows
        $states = State::all();
        $following_ids = Follower::where('follower_user_id', auth()->user()->id)->pluck('user_id')->toArray();
        $role_id = Role::where('name', 'Merchant')->pluck('id')->toArray();
        $users = User::with(['profile_picture', 'community' ])->where('id', '!=', auth()->user()->id)->whereIn('role_id', $role_id)->paginate(8);
        return view('users.follow_brands', compact('users', 'following_ids', 'states'));
    }

    public function merchantsFollowComplete()
    {
        $done = auth()->user()->registration_status = null;
        auth()->user()->save();

        return response()->json([
          'success' => $done
          
        ]);
        // return redirect('/');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($reference)
    {
        $role_user = Role::where('name', 'User')->get();
        $role_merchant = Role::where('name', 'Merchant')->get();
        
        // Find the User. Redirect if the User doesn't exist
        $user = User::where('reference', $reference)->first();
        auth()->user()->following()->detach($user->id);
        //notify $user that he has been unfollowed by auth user
        SocialNotification::create([
            'user_id' => $user->id,
            'foreigner_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . ' unfollowed you!',
            'description_id' => 2 
            ]);
        $num_of_user = count(auth()->user()->following()->whereIn('role_id', $role_user)->get());
        $num_of_merchant = count(auth()->user()->following()->whereIn('role_id', $role_merchant)->get());
        // return response()->json($user->reference, $num_of_merchant, $num_of_user);
        return response()->json([
          'reference' => $user->reference,
          'user_count'    =>  $num_of_user,
          'merchant_count' => $num_of_merchant
        ]);
        
        // return back()->with('info', 'unfollowed ' . $email);
    }

}
