<?php
/*
	for things that aren't for authenticated users
	- login
	- registration
	- home page (before login)
*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class CollectionsController extends Controller
{
    public function item() {
		$items = Item::all();
		return view('/item', ['items' => $items]);
	}

}
