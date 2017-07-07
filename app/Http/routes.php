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
    return view('welcome');
});


Route::any('/home',   'PagesController@home');
Route::get('/route1', 'PagesController@route1');
Route::get('/route2', 'PagesController@route2');

Route::get('/route3', 'PagesController@route3');
Route::get('/route4', 'PagesController@route4');

Route::get('/update/{id}/{menu}', 'PagesController@update');
