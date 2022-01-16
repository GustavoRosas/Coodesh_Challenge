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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('', 'App\Http\Controllers\ArticleController@challenge');

Route::get('articles/', 'App\Http\Controllers\ArticleController@listAllArticles');

Route::get('articles/{id}', 'App\Http\Controllers\ArticleController@listArticle');

Route::post('articles/', 'App\Http\Controllers\ArticleController@addArticle');

Route::put('articles/{id}', 'App\Http\Controllers\ArticleController@updateArticle');

Route::delete('articles/{id}', 'App\Http\Controllers\ArticleController@deleteArticle');



