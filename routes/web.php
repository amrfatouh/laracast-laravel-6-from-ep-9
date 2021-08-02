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

Route::get('articles', function () {
  $articles = App\Article::all();
  return view('articles.show', ['articles' => $articles]);
});

Route::get('articles/{articleId}', function ($articleId) {
  $article = App\Article::find($articleId);
  return view('articles.showOne', ['article' => $article]);
});