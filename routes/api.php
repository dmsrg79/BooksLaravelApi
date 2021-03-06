<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('books', 'API\v1\BookController');


//Route::get('/list', 'ApiController@list');
//Route::get('/{books}', 'ApiController@get');
//Route::post('/{books}', 'ApiController@update');
//Route::delete('/{books}', 'ApiController@delete');
