<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionsController extends Controller
{

    public function index() {
		return view('/collections');
	}

    public function list() {
        return view('/collections/list');
    }
    public function createCollection() {
        return view('/collections/list/createcollection');
    }
    public function createCollectionPost() {

    }

    public function addItem() {
        return view('/collections/list/additem');
    }

    public function addItemPost() {

    }
}
