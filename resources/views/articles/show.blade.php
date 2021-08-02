@extends('layout')
@section('content')
  <h2><a href="/articles/create">Create Article</a></h2>
  @foreach ($articles as $article)
    <h2>
      <a href="articles/{{ $article->id }}">{{ $article->title }}</a>
      <small><a href="/articles/{{ $article->id }}/edit">edit</a></small>
    </h2>
    <p>{{ $article->excerpt }}</p>
    <hr>
  @endforeach
@endsection
