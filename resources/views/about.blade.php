@extends('layout')

@section('content')
  <h1>About Us</h1>

  <ul>
  @foreach ($articles as $article)
    <li>
      <h4><a href="articles/{{ $article->id }}">{{ $article->title }}</a></h4>
      <p>{{ $article->excerpt }}</p>
    </li>
  @endforeach
</ul>
@endsection
