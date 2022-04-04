<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrevOwned;

class PrevOwnController extends Controller
{
    public function index(Request $request) {
		$currentUser = $request->user()->email;
		$previouslyOwned = PrevOwned::where('belongsTo', $currentUser)->get();

		return view('/prevown/index', ['prevOwned' => $previouslyOwned]);
	}

}
