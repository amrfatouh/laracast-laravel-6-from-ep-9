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

Route::get('articles/create', 'ArticleController@create')->name('articles.create');
Route::post('articles/create', 'ArticleController@store');
Route::get('articles/{article}/edit', 'ArticleController@edit')->name('articles.edit');
Route::put('articles/{article}', 'ArticleController@update');
Route::get('articles/{article}', 'ArticleController@show')->name('articles.show');
Route::get('articles', 'ArticleController@index')->name('articles.index');