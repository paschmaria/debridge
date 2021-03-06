<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;
use App\Models\Notification;
use App\Models\FriendRequest;

class FriendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user, Request $request)
    {
        $users = $user->friends()->with('profile_picture')->orderBy('first_name')->paginate(20);

        if ($this->isValidPageNumber($request->page)) {
                return view('bridger.partials.friends', compact('users'));
            }

        return view('bridger.friends', compact('user', 'users'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findMore(Request $request){
        $role = Role::where('name', 'User')->get()->pluck('id')->toArray();
        $users = User::with(['profile_picture'])
                            ->whereIn('role_id', $role)
                            ->where('id', '!=', auth()->user()->id)
                            ->orderBy('first_name')->paginate(20);
        if ($this->isValidPageNumber($request->page)) {
                return view('bridger.partials.friends', compact('users'));
            }
        return view('bridger.find_friends', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, Request $request)
    {
        //accept friend request
        auth()->user()->friends()->attach($user);
        $user->friends()->attach(auth()->user());
        auth()->user()->received_requests()->detach($user);
        auth()->user()->sent_requests()->detach($user);
        
        $notification = Notification::create([
            'user_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . ' accepted your friendship!',
            ]);
        $notification->users()->attach($user);
        $notification->save();

        if($request->ajax()){
            return response()->json(['user' => $user->reference]);
        }

        return back()->with('success', $user->full_name() . ' is now your friend!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Request $request)
    {
        auth()->user()->friends()->detach($user);
        $user->friends()->detach(auth()->user());

        $notification = Notification::create([
            'user_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . ' has unfriended you!',
            ]);
        $notification->users()->attach($user);
        $notification->save();

        if($request->ajax()){
            return response()->json(['user' => $user->reference]);
        }

        return back()->with('info', 'You unfriended ' . $user->first_name . '!');
    }
}
