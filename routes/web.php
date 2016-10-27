<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/lorem-ipsum', 'LoremIpsumController@showForm');
Route::post('lorem-ipsum', 'LoremIpsumController@generateText');
Route::get('/random-user', 'RandomUserController@showForm');
Route::post('random-user', 'RandomUserController@generateUser');
