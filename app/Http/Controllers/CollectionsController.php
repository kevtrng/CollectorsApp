<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionsController extends Controller
{

    public function index() {
        $collections = Collection::where('userEmail','=', 'test@test.com');
//        $collections = Collection::all();
//        $collections = $collections->toArray();
        $type = gettype($collections);
		return view('/collections/index', ['collections'=> $collections, 'type'=>$type]);
	}

    public function list($id) {
        return view('/collections/list');
    }
    public function createCollection() {
        return view('/collections/list/createcollection');
    }
    public function createCollectionPost(Request $request) {

        $collection = new Collection();
        $collection->collectionName = $request->name;
        $collection->userEmail = "test@test.com";
        $collection->items = [];

        $collection->save();

        return redirect('/collections/');

    }

    public function addItem() {
        return view('/collections/list/additem');
    }

    public function addItemPost(Request $request) {

    }
}
