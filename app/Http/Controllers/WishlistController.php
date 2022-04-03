<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Jenssegers\Mongodb\Auth\User;


class WishlistController extends Controller
{
    public function index(Request $request) {
		$currentUserEmail = $request->user()->email;
		$wishlist = Wishlist::where("email", $currentUserEmail)
			->project(['_id' => 0, 'email' => 0])
			->get();
		dump($wishlist);

		return view('/wishlist/index', ['user' => $currentUserEmail, 'wishlist' => $wishlist]);
	}

}
