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

Route::get('/client', ['uses' => 'ClientController@index']);
Route::post('/client', ['uses' => 'ClientController@store']);
Route::get('/client/{id}', ['uses' => 'ClientController@show']);
Route::delete('/client/{id}', ['uses' => 'ClientController@destroy']);