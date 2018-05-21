<?php

Route::get ( '/', 'HomeController@index');

Route::get ( '/home', 'HomeController@index' );

Route::get ( '/getPosts', 'HomeController@getPosts' );

// Route::post ( '/create_user', 'Auth\RegisterController@create_user' );

Auth::routes ();

Route::get ( '/admin', 'AdminController@index' );

Route::get ( '/posts', 'AdminController@posts' );

Route::get ( '/type', 'AdminController@type' );

Route::get ( '/editor', 'AdminController@editor' );

Route::get ( '/editor{id}', 'AdminController@edit' );

Route::get ( '/dashboard', 'AdminController@dashboard' );

Route::post ( '/save_content', 'AdminController@save_content' );

Route::post ( '/save_type', 'AdminController@save_type' );

Route::post ( '/ajax_save_type', 'AdminController@ajax_save_type' );

Route::post ( '/toggle_type', 'AdminController@toggle_type' );

Route::post ( '/toggle_post', 'AdminController@toggle_post' );

Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');