@extends('layout')
@section('content')
  <h2><a href="{{ route('articles.create') }}">Create Article</a></h2>
  @foreach ($articles as $article)
    <h2>
      <a href="{{ route('articles.show', ['article' => $article->id]) }}">{{ $article->title }}</a>
      <small><a href="{{ route('articles.edit', ['article' => $article->id]) }}">edit</a></small>
    </h2>
    <p>{{ $article->excerpt }}</p>
    <hr>
  @endforeach
@endsection
