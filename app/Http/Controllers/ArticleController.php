<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
  public function showOne($articleId)
  {
    $article = App\Article::find($articleId);
    dd($article);
  }
}
