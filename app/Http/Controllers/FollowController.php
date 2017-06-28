<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Follower;
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

    public function index()
    {
        $following =  auth()->user()->following->where('id', '!=', auth()->user()->id);
        $followers =  auth()->user()->followers->where('id', '!=', auth()->user()->id);
        $following_count =  count($following);
        $followers_count =  count($followers);
        $following_ids = Follower::where('follower_user_id', auth()->user()->id)->pluck('user_id')->toArray();
        return view('users.bridger', 
            compact('followers', 'following', 'followers_count', 'following_count', 'following_ids')
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
    public function store($email)
    {
        // Find the User. Redirect if the User doesn't exist
        $user = User::where('email', $email)->first();
        auth()->user()->following()->attach($user->id);
        // notify $user the he has been followed by auth user
        SocialNotification::create([
            'user_id' => $user->id,
            'foreigner_id' => auth()->user()->id,
            'message' => auth()->user()->first_name . ' is now following you!',
            'description_id' => 1 
            ]);
        return response()->json($email);
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
        $following_ids = Follower::where('follower_user_id', auth()->user()->id)->pluck('user_id')->toArray();
        $users = User::with(['profile_picture', 'community' ])->where('id', '!=', auth()->user()->id)->where('role_id', 1)->paginate(8);
        return view('users.follow_friends', compact('users', 'following_ids'));
    }

    public function getMerchant($value='')
    {
        $following_ids = Follower::where('follower_user_id', auth()->user()->id)->pluck('user_id')->toArray();
        $users = User::with(['profile_picture', 'community' ])->where('id', '!=', auth()->user()->id)->where('role_id', 2)->paginate(8);
        return view('users.follow_brands', compact('users', 'following_ids'));
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

        if(\Session::has('to_follow')){
            $to_follow = \Session::get('to_follow');
        }
        foreach ($request->request as $key => $value) {
            if ($value){
                $to_follow[] = $value;
            }
        }
        \Session::put('to_follow', $to_follow);
        return response()->json(true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($email)
    {
        // Find the User. Redirect if the User doesn't exist
        $user = User::where('email', $email)->first();
        auth()->user()->following()->detach($user->id);
        //notify $user that he has been unfollowed by auth user
        SocialNotification::create([
            'user_id' => $user->id,
            'foreigner_id' => auth()->user()->id,
            'message' => auth()->user()->first_name . ' unfollowed you!',
            'description_id' => 2 
            ]);
        return response()->json($email);
        
        // return back()->with('info', 'unfollowed ' . $email);
    }

}
