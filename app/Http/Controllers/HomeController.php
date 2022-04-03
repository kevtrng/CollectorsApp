<?php
/*
	for things that aren't for authenticated users
	- login
	- registration
	- home page (before login)
*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Input, Redirect; 
use App\Models\User;

class HomeController extends Controller
{
    public function login() {
		return view('/home/login');
	}

	public function submitLogin(Request $request) {
		$request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);
        User::where('email',$request->name)->first();

        if (auth()->attempt($credentials)) {
            return redirect('/');
        } else{
            return back()->with('error',
            'An error occurred during login. Please try again.');
		}

	}

    public function register() {
		return view('/home/register');
	}

	public function submitRegister(Request $request) {
		$request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 
                        'unique:users'],
            'password' => 'required'
        ]);
 
        User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
        ]);
       
        return redirect('/login')->with('success','Registration successful!');

	}

	public function logout() {
		\Auth::logout();
		return redirect("/");

	}

	public function landing() {
		return view ('home/landing');
	}


}
