<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', 'PostController');

Route::get('brawls', 'BrawlController@index')->name('brawl.index');
Route::post('brawls', 'BrawlController@store')->name('brawl.store');
Route::put('brawls/{brawl}', 'BrawlController@update')->name('brawl.update');

Route::get('users', 'UserController@index')->name('users.index');
Route::put('users/{user}', 'UserController@update')->name('user.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
