<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;
use App\Models\Notification;

class TradePartnerController extends Controller
{
   public function show($reference, Request $request)
    {
    	$merchant = User::where('reference', $reference)->with('merchant_account')->first();
        $merchants = $merchant->trade_partners()->with('profile_picture')->orderBy('first_name')->paginate(20);

        if ($this->isValidPageNumber($request->page)) {
                return view('bridger.partials.trade_partners', compact('merchants'));
            }
    	return view('bridger.trade_partners', compact('merchant', 'merchants'));
    }

    public function findMore(Request $request){
    	$role = Role::where('name', 'Merchant')->first();
        $merchants = User::with(['profile_picture'])
                            ->where('role_id', $role->id)
                            ->where('id', '!=', auth()->user()->id)
                            ->orderBy('first_name')->paginate(20);
       	if ($request->ajax()) {
                return view('bridger.partials.trade_partners', compact('merchants'));
            }
    	return view('bridger.find_trade_partners', compact('merchants'));
    }

    public function create(User $user, Request $request)
    {
        auth()->user()->trade_partners()->attach($user);
    	$user->trade_partners()->attach(auth()->user());
        auth()->user()->received_trade_requests()->detach($user);
    	auth()->user()->sent_trade_requests()->detach($user);
    	// notify $user
    	$notification = Notification::create([
            'user_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . auth()->user()->getStoreName() .  ' accepted your trade request!',
            ]);
        $notification->users()->attach($user);
        $notification->save();

        if($request->ajax()){
            return response()->json(['user' => $user->reference]);
        }

    	return back()->with('success', $user->full_name() . auth()->user()->getStoreName() . ' is now your trade partner!');
    }

    public function destroy(User $user, Request $request)
    {
        auth()->user()->trade_partners()->detach($user);
    	$user->trade_partners()->detach(auth()->user());
    	// notify $user
    	$notification = Notification::create([
            'user_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . auth()->user()->getStoreName() .  ' remove you as a trade partner!',
            ]);
        $notification->users()->attach($user);
        $notification->save();

        if($request->ajax()){
            return response()->json(['user' => $user->reference]);
        }

    	return back()->with('info', $user->full_name() . auth()->user()->getStoreName() . ' is no longer your trade partner!');
    }
}
