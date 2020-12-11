<?php

use Illuminate\Http\Request;

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

Route::namespace('Auth')->group(function(){
    Route::post('register', 'RegisterController');
    Route::post('login', 'LoginController');
    Route::post('logout', 'LogoutController');
});

Route::namespace('Article')->middleware('auth:api')->group(function(){
    Route::post('create-article', 'ArticleController@store');
    Route::patch('update-article/{article}', 'ArticleController@update'); // untuk mengupdate keseluruhan column pake PUT, untuk beberapa atau salah satu column pake PATCH
});

Route::get('articles/', 'Article\ArticleController@index');
Route::get('articles/{article}', 'Article\ArticleController@show');

Route::get('user', 'UserController');