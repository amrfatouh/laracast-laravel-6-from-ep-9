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

Route::get('/contact', function () {
  return view('contact');
})->name('contact');

Route::post('/contact', function () {
  request()->validate(['email' => "required|email"]);
  Mail::raw('Hello world', function ($message) {
    $message->to(request('email'), 'Mr Wanderer');
    $message->subject('Hello World');
  });
  return redirect(route('contact'))->with('message', 'E-mail sent');
});

Route::get('articles/create', 'ArticleController@create')->name('articles.create');
Route::post('articles/create', 'ArticleController@store');
Route::get('articles/{article}/edit', 'ArticleController@edit')->name('articles.edit');
Route::put('articles/{article}', 'ArticleController@update');
Route::get('articles/{article}', 'ArticleController@show')->name('articles.show');
Route::get('articles', 'ArticleController@index')->name('articles.index');