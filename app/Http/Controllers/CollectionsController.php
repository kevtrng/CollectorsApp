<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\PrevOwned;

class CollectionsController extends Controller
{

    public function index(Request $request) {
      $currentUser = $request->user()->email;
        $collections = Collection::where('userEmail', $currentUser)->get();
//        $collections = Collection::all();
//        $collections = $collections->toArray();
        $type = gettype($collections);
		return view('/collections/index', ['collections'=> $collections, 'type'=>$type]);
	}

    public function list(Request $request) {
      $currentCollectionName = $request->name;
      $collection = Collection::where('_id', $request->id)->get();
      return view('/collections/list', ['collectionName' => $currentCollectionName, 'collection' => $collection]);
    }
    public function createCollection() {
        return view('/collections/list/createcollection');
    }
    public function createCollectionPost(Request $request) {
      $currentUser = $request->user()->email;
        $collection = new Collection();
        $collection->collectionName = $request->name;
        $collection->userEmail = $currentUser;
        $collection->items = [];

        $collection->save();

        return redirect('/collections/');

    }

    public function addItem(Request $request) {
        return view('/collections/additem', ['collection' => $request->name]);
    }

    public function addItemPost(Request $request) {
      $collectionName = $request->name;
      $collection = Collection::where('collectionName', $collectionName)->get();
      Collection::where('collectionName', $collectionName)->push('items', array('itemName' => $request->itemName));

      // return redirect("/collections/list", 302, ['collectionName' => $request->name, 'collection' => $collection]);
      return redirect("/collections");
    }

	public function deleteItem(Request $request) {
		$id = $request->id;
		$name = $request->name;

		$p = new PrevOwned();
		$p->belongsTo = $request->user()->email;
		$p->name = $name;
		$p->save();

		Collection::where("_id",$id)->pull("items", ['itemName' => $name]);

		return redirect("/collections");
		// $item->delete();
	}
}
