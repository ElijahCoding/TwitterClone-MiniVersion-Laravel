<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tweets', 'TweetController@index')->name('home');
Route::post('/tweets', 'TweetController@store');

Auth::routes();
