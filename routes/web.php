<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store');

    Route::post('/profiles/{user:name}/follow', 'FollowController@store');
    Route::get('/profiles/{user:name}/edit', 'ProfileController@edit')
        ->middleware('can:edit,user');
});

Route::get('/profiles/{user:name}', 'ProfileController@show')->name('profile');

Auth::routes();
