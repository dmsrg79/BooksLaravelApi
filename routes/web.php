<?php

use Illuminate\Support\Facades\Route;

Route::Resource('authors', 'AuthorController');
Route::Resource('books', 'BookController');
Route::Resource('users', 'UserController');



Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');



//Route::group(['middleware' => 'auth'], function() {
//    Route::Resource('users', 'UserController');
//});
