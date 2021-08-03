@extends('layout')

@section('content')
  <h2>
    {{ $article->title }}
    <small><a href="{{ route('articles.edit', ['article' => $article->id]) }}">edit</a></small>
  </h2>
  <p>{{ $article->body }}</p>
  <a href="{{ route('articles.index') }}">back</a>
@endsection
