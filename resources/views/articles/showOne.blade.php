@extends('layout')

@section('content')
  <h2>
    {{ $article->title }}
    <small><a href="{{ route('articles.edit', ['article' => $article->id]) }}">edit</a></small>
  </h2>
  <p>{{ $article->body }}</p>
  <p>tags: 
    @foreach ($article->tags as $tag)
      <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
    @endforeach
  </p>
  <a href="{{ route('articles.index') }}">back</a>
@endsection
