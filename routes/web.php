<?php

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
    return view('welcome');
});

Route::get('/about', function () {
  $articles = App\Article::latest()->get();
  return view('about', ['articles' => $articles]);
});

Route::get('articles/create', 'ArticleController@create');
Route::post('articles/create', 'ArticleController@store');
Route::get('articles/{articleId}/edit', 'ArticleController@edit');
Route::put('articles/{articleId}', 'ArticleController@update');
Route::get('articles/{articleId}', 'ArticleController@show');
Route::get('articles', 'ArticleController@index');