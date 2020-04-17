<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/tweets', 'TweetController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
