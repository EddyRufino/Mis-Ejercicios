<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('brawl', 'BrawlController@index')->name('brawl.color');
Route::get('users', 'UserController@index')->name('users.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
