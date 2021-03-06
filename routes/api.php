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

// List articles
Route::get('articles', 'ArticlesController@index');

// List single article
Route::get('articles/{id}', 'ArticlesController@show');

// Create new article
Route::post('articles', 'ArticlesController@store');

// Update article
Route::put('articles', 'ArticlesController@update');

// Delete article
Route::delete('articles/{id}', 'ArticlesController@destroy');
