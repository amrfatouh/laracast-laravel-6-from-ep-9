@extends('layout')

@section('content')
  <form action="/articles/create" method="POST">
    @csrf
    <div>
      <label for="title">Title</label>
      <input type="text" name="title" id="title" value="{{ old('title') }}" style="@error('title') border:1px solid red @enderror">
      @error('title')
        <span style="color: red;"><small>title is required</small></span>
      @enderror
    </div>

    <div>
      <label for="body">Body</label>
      <textarea name="body" id="body" rows="7" cols="50" style="@error('body') border:1px solid red @enderror">
        {{ old('body') }}
      </textarea>
    </div>
    @error('body')
      <div style="color: red"><small>body is required</small></div>
    @enderror
    <input type="submit" value="submit">
  </form>
  <a href="/articles">back</a>
@endsection
