<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Jenssegers\Mongodb\Auth\User;


class WishlistController extends Controller
{
    public function index(Request $request) {
		$currentUserEmail = $request->user()->email;
		$wishlist = Wishlist::where("email", $currentUserEmail)->select(['items'])->get();
		return view('/wishlist/index', ['user' => $currentUserEmail, 'wishlist' => $wishlist]);
	}

}
