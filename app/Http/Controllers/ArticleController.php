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

  public function create()
  {
    return view('articles.create');
  }

  public function edit($articleId)
  {
    $article = Article::find($articleId);
    return view('articles.edit', ['article' => $article]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => "required",
      'body' => 'required'
    ]);

    $article = new Article;
    $article->title = request('title');
    $article->body = request('body');
    $article->excerpt = substr(request('body'), 0, 70) . ((strlen(request('body')) > 70) ? '...' : '');
    $article->save();
    return redirect("/articles/$article->id");
  }

  public function update($articleId, Request $request)
  {
    $request->validate([
      'title' => "required",
      'body' => 'required'
    ]);

    $article = Article::find($articleId);
    $article->title = request('title');
    $article->body = request('body');
    $article->excerpt = substr(request('body'), 0, 70) . ((strlen(request('body')) > 70) ? '...' : '');
    $article->save();
    return redirect("/articles/$article->id");
  }
}
