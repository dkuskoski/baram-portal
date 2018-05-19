<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');

Route::get('/active_posts', 'RESTController@getActivePosts');

// Fields: id
Route::get('/post', 'RESTController@getPost');
// Fields: cat, count 
// if cat == search add field search
Route::get('/posts', 'RESTController@getPosts');

// Fields: count
Route::get('/most_viewed', 'RESTController@getMostViewed');

Route::get('/category', 'RESTController@getCategory');