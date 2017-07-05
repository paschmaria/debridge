<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\User;

class TradeRequestController extends Controller
{
    //
    public function showMerchants(){
    	$role = Role::where('name', 'Merchant')->first();
    	$merchants = User::where('role_id', $role->id)->where('id', '!=', auth()->user()->id)->get();
    	// dd($merchants);

    	return view('tradeRequest', compact('merchants'));
    }
}
