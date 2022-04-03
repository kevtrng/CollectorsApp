<?php

use Illuminate\Support\Facades\Route;
use app\Models\Item;
use app\Http\Controllers\HomeController;
use app\Http\Controllers\CollectionsController;
use app\Http\Controllers\WishlistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home/landing');
});
Route::get('/login', function () {
    return view('home/login');
});
Route::get('/register', function () {
    return view('home/register');
});

Route::get('/logout', 'App\Http\Controllers\HomeController@logout');
Route::post('/submitRegister', 'App\Http\Controllers\HomeController@submitRegister');
Route::post('/submitLogin', 'App\Http\Controllers\HomeController@submitLogin');

Route::get('/collections', 'App\Http\Controllers\CollectionsController@index');

Route::get('collections/list', 'App\Http\Controllers\CollectionsController@list');
Route::get('/collections/list/createcollection', function () {
    return view('collections/createcollection');
});
Route::post('/collections/createcollection', 'App\Http\Controllers\CollectionsController@createCollectionPost');

Route::get('/collections/list/additem', 'App\Http\Controllers\CollectionsController@addItem');
Route::post('/collections/addItem', 'App\Http\Controllers\CollectionsController@addItemPost');


Route::get('/dashboard', function () {
    return view('dashboard/index');
});
Route::get('/prevown', function () {
    return view('prevown/index');
});

Route::get('/wishlist', 'App\Http\Controllers\WishlistController@index');
Route::get('/wishlist/wish', 'App\Http\Controllers\WishlistController@wish');
Route::post('/wishlist/submitWish', 'App\Http\Controllers\WishlistController@submitWish');
Route::post('/wishlist/submitDeleteWish', 'App\Http\Controllers\WishlistController@submitDeleteWish');

Route::get('/trade', function () {
    return view('trade/index');
});


