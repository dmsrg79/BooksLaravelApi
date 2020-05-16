<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home-page');
});

Auth::routes([
        'rest' => false,
        'confirm' => false,
        'verify' => false,
    ]
);

Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');


Route::Resource('authors', 'AuthorController');
Route::Resource('books', 'BookController');




//Route::get('/book/all', 'BookController@showAllBooks')->name('all-books');
//Route::get('/book/{id}', 'BookController@showOneBook')->name('one-book');
//Route::get('/book/{id}/update', 'BookController@showPageUpdateBook')->name('update-book');
//Route::post('/book/{id}/update', 'BookController@SubmitUpdateBook')->name('submit-update-book');
//Route::get('/book/{id}/delete', 'BookController@deleteBook')->name('submit-delete-book');
//Route::get('/add-book', 'BookController@showPageAddBook')->name('add-book-page');
//Route::post('/add-book/submit', 'BookController@createBook')->name('add-book-create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/users', function () {
    return view('/users/show_all_users');
});
