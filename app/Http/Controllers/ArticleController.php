<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
  public function index()
  {
    $tag = request('tag');
    if ($tag) $articles = \App\Tag::where('name', $tag)->first()->articles;
    else $articles = \App\Article::all();
    return view('articles.show', ['articles' => $articles]);
  }

  public function show(Article $article)
  {
    return view('articles.showOne', ['article' => $article]);
  }

  public function create()
  {
    return view('articles.create', ['tags' => \App\Tag::all()]);
  }

  public function edit(Article $article)
  {
    return view('articles.edit', ['article' => $article]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => "required",
      'body' => 'required',
      'tags' => 'exists:tags,id'
    ]);

    $article = Article::create([
      'title' => request('title'),
      'body' => request('body'),
      'excerpt' => substr(request('body'), 0, 70) . ((strlen(request('body')) > 70) ? '...' : ''),
      'user_id' => 2
    ]);
    $article->tags()->attach(request('tags'));

    return redirect()->route('articles.show', ['article' => $article->id]);
  }

  public function update(Article $article, Request $request)
  {
    $request->validate([
      'title' => "required",
      'body' => 'required'
    ]);

    $article->fill([
      'title' => request('title'),
      'body' => request('body'),
      'excerpt' => substr(request('body'), 0, 70) . ((strlen(request('body')) > 70) ? '...' : ''),
    ]);
    $article->save();
    return redirect(route('articles.show', ['article' => $article->id]));
  }
}
