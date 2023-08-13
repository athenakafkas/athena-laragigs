<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//bring in model
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

//Single Listing 
Route::get('/listings/{id}', function($id) {
    return view ('listing', [
        'listing' => Listing::find($id)
    ]);
});

/* NOTES on ROUTES for REFERENCE:
//welcome route
Route::get('/hello', function () {
    return response('<h1>Hello World</h1>', 200)
        ->header('Content-Type', 'text/html')
        ->header('foo', 'bar');
});

//posts route
Route::get('/posts/{id}', function ($id) {
    dd($id);
    return response('Post ' . $id);
})->where('id', '[0-9]+');

//able to make new search request (http://127.0.0.1:8000/search?name=Athena&city=Madison)
//pair with use Illuminate\Http\Request; ... download Laravel Blade Snippets to "import class" on Request
Route::get('search', function(Request $request){
    return $request->name . ' ' . $request->city;
    //return request as plain text^^
});
*/