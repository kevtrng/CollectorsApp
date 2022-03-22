<?php
/*
	for things that aren't for authenticated users
	- login
	- registration
	- home page (before login)
*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    public function login() {
		return view('/home/login');
	}

    public function register() {
		return view('/home/register');
	}

	public function landing() {
		return view ('home/landing');
	}


}
