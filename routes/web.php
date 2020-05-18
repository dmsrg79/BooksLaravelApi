<?php

use Illuminate\Support\Facades\Route;

Route::Resource('authors', 'AuthorController');
Route::Resource('books', 'BookController');
Route::Resource('users', 'UserController');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');




