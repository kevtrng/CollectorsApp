<?php
/*
	for things that aren't for authenticated users
	- login
	- registration
	- home page (before login)
*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function index() {
		return view('/trade');
	}

}
