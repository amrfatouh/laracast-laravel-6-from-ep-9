@extends('layout')

@section('content')
  <form action="{{ route('articles.create') }}" method="POST">
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
      <textarea name="body" id="body" rows="7" cols="50" style="@error('body') border:1px solid red @enderror">{{ old('body') }}</textarea>
    </div>
    @error('body')
      <div style="color: red"><small>body is required</small></div>
    @enderror
    <label for="tags">Tags</label>
    <select name="tags[]" id="tags" multiple>
      @foreach ($tags as $tag)
        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
      @endforeach
    </select>
    @error('tags')
    <div style="color: red"><small>{{ $message }}</small></div>
    @enderror
    <br>
    <input type="submit" value="submit">
  </form>
  <a href="{{ route('articles.index') }}">back</a>
@endsection
