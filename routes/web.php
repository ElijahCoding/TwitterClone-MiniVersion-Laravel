<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store');
});

Auth::routes();
