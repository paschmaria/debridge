<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Merchant;

class UserSearchController extends Controller
{
    public function search(Request $request)
    {
        // $search = $request->input('search');
        $user = User::with('bridgeCode')->where('first_name', 'like', $request->search.'%')->orWhere('last_name', 'like', $request->search.'%')->orWhere('email', 'like', $request->search.'%')->get();
            return response()->json([
            'user' => $user
            ]);         
    }

}
