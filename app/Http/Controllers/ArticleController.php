<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
  public function index()
  {
    $articles = Article::all();
    return view('articles.show', ['articles' => $articles]);
  }

  public function show($articleId)
  {
    $article = Article::find($articleId);
    return view('articles.showOne', ['article' => $article]);
  }
}
