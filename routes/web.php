<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/lorem-ipsum', 'LoremIpsumController@showForm');
Route::post('lorem-ipsum', 'LoremIpsumController@generateText');
Route::get('/random-user', 'RandomUserController@showForm');
Route::post('random-user', 'RandomUserController@generateUser');
