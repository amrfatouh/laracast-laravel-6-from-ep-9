@extends('layout')

@section('content')
  <form action="/articles/{{ $article->id }}" method="POST">
    @csrf
    @method('PUT')
    <div>
      <label for="title">Title</label>
      <input type="text" name="title" id="title" value="{{ $article->title }}" style="@error('title') border:1px solid red @enderror">
      @error('title')
        <span style="color: red;"><small>title is required</small></span>
      @enderror
    </div>
    <div>
      <label for="body">Body</label>
      <textarea name="body" id="body" rows="7" cols="50" style="@error('body') border:1px solid red @enderror">{{ $article->body }}</textarea>
    </div>
    @error('body')
      <div style="color: red"><small>body is required</small></div>
    @enderror
    <input type="submit" value="submit">
  </form>
  <a href="{{ route('articles.index') }}">back</a>&nbsp;&nbsp;
  <a href="{{ route('articles.show', ['article' => $article->id]) }}">back to article</a>
@endsection
