<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//the following route is accessible through (http://127.0.0.1:8000/api/posts)
/*access the URL path /posts using an HTTP GET request >> return a JSON response containing an array of posts.
Route::get('/posts', function() {
    return response()->json([
        'posts' => [
            [
                'title' => 'Post One'
            ]
        ]
    ]);
});
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
