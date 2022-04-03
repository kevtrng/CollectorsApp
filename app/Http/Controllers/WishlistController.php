<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Redis;
use Jenssegers\Mongodb\Auth\User;


class WishlistController extends Controller
{
    public function index(Request $request) {
		$currentUserEmail = $request->user()->email;
		$wishlist = Wishlist::where("email", $currentUserEmail)
			->project(['email' => 0])
			->get();

		return view('/wishlist/index', ['user' => $currentUserEmail, 'wishlist' => $wishlist]);
	}

	public function wish() {
		return view("/wishlist/wish");
	}

	public function submitWish(Request $request) {
		$request->validate([
            'name' => 'required',
        ]);

		$wish = new Wishlist();
		$wish->name = $request->name;
		$wish->url = $request->url;
		$wish->email = $request->user()->email;
		$wish->save();

		return redirect('/wishlist');

	}

	public function submitDeleteWish(Request $request) {
		// $id = $request->route('id');
		// $w = Wishlist::query()->find($id);
		$id = $request->id;
		$wish = Wishlist::find($id);
		$wish->delete();

		return redirect("/wishlist");

	}

}
