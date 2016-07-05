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

Route::post('/individual/search','IndividualController@search');

Route::get('/individual/search', function(){
    return view('individual.search');
})->middleware('auth');

Route::get('/individual/show/{id?}','IndividualController@show');

Route::post('/individual/add','IndividualController@create');

Route::post('/individual/update','IndividualController@edit');

Route::post('/individual/delete/{id}','IndividualController@delete');

Route::post('/individual/move','IndividualController@move');





Route::post('/family/search','FamilyController@search');

Route::get('/family/search',function(){
    return view('family.search');
})->middleware('auth');

Route::get('/family/show/{id}','FamilyController@show');

Route::post('/family/add','FamilyController@create');
Route::get('family/add',function(){});


Route::post('/family/update','FamilyController@edit');

Route::post('/family/delete/{id}','FamilyController@delete');



Route::get('failure',function(){
    return view('failure');
});

Route::get('success',function (){
    return view('success');
});




