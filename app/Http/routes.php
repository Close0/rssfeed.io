<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/feed/{id}.xml', 'FeedsController@render');
Route::resource('feed', 'FeedsController');
Route::resource('feed.item', 'FeedItemsController');
Route::resource('feed.image', 'FeedImagesController');

Route::auth();

Route::get('/home', 'HomeController@index');
