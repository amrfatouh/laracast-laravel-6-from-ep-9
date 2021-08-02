@extends('layout')

@section('content')
  <h1>About Us</h1>

  <ul>
  @foreach ($articles as $article)
    <li>
      <h4>{{ $article->title }}</h4>
      <p>{{ $article->excerpt }}</p>
    </li>
  @endforeach
</ul>
@endsection
