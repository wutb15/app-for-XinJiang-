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

Route::get('/home','HomeController@index');

Route::get('/individual/search','IndividualController@search');

Route::get('/individual/show/{$id}','IndividualController@show');

Route::post('/individual/add','IndividualController@create');

Route::post('/individual/update','IndividualController@edit');

Route::post('/individual/delete','IndividualController@delete');

Route::post('/individual/move','IndividualController@move');


Route::get('/family/search','FamilyController@search');

Route::get('/family/show/{$id}','FamilyController@show');

Route::post('/family/add','FamilyController@create');

Route::post('/family/update','FamilyController@edit');

Route::post('/family/delete','FamilyController@delete');




