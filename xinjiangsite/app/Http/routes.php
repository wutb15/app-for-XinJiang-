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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/search','SearchHandleController@handle');

Route::get('/show/{$id}','DataController@show');

Route::post('/show/add','AddHandleController@handle');

Route::post('/update','UpdateHandleController@handle');

Route::post('/show/delete','DeleteHandleController@handle');


