<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;
use App\Models\Notification;

class TradePartnerController extends Controller
{
    protected function isValidPageNumber($page)
    {
        return $page >= 2 && filter_var($page, FILTER_VALIDATE_INT) !== false;
    }

    public function show($reference, Request $request)
    {
    	$merchant = User::where('reference', $reference)
    					->with([
    						'merchant_account',
    						'trade_partners' => function($q){
	    						return $q->with(['profile_picture', 'merchant_account']);
	    					}])->first();
        $merchants = $merchant->trade_partners->sortBy('first_name');

        if (!$this->isValidPageNumber($request->page)) {
            $merchants =  $merchants->splice(0,20);
        } else {
            $start =  20 + (((int)$request->page - 2) * 20);
            $end = $start + 20;
            $merchants =  $merchants->splice($start, $end);
        }

        if ($this->isValidPageNumber($request->page)) {
                return view('bridger.partials.trade_partners', compact('merchants'));
            }
    	return view('bridger.trade_partners', compact('merchant', 'merchants'));
    }

    public function findMore(Request $request){
    	$role = Role::where('name', 'Merchant')->first();
        // $user_partners = auth()->user()->trade_partners->pluck('id')->toArray();
        $merchants = User::with(['profile_picture'])
                            ->where('role_id', $role->id)
                            ->where('id', '!=', auth()->user()->id)
                            // ->whereNotIn('id', $user_partners)
                            ->orderBy('first_name')
                            ->paginate(30);
       	// dd(auth()->user()->sent_trade_requests->pluck('id')->toArray());
        if ($this->isValidPageNumber($request->page)) {
                return view('bridger.partials.trade_partners', compact('merchants'));
            }
    	return view('bridger.find_trade_partners', compact('merchants'));
    }

    public function create($reference)
    {
    	$user = User::where('reference', $reference)->first();
    	auth()->user()->trade_partners()->attach($user);
    	auth()->user()->received_trade_requests()->detach($user);
    	// notify $user
    	$notification = Notification::create([
            'user_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . auth()->user()->getStoreName() .  ' accepted your trade request!',
            ]);
        $notification->users()->attach($user);
        $notification->save();

    	return back()->with('success', $user->full_name() . auth()->user()->getStoreName() . ' is now your trade partner!');
    }

    public function destroy()
    {
    	$user = User::where('reference', $reference)->first();
    	auth()->user()->trade_partners()->detach($user);
    	// $user->trade_partners()->detach(auth()->user());
    	// notify $user
    	$notification = Notification::create([
            'user_id' => auth()->user()->id,
            'message' => auth()->user()->full_name() . auth()->user()->getStoreName() .  ' remove you as a trade partner!',
            ]);
        $notification->users()->attach($user);
        $notification->save();
    	return back()->with('info', $user->full_name() . auth()->user()->getStoreName() . ' is no longer your trade partner!');
    }
}
