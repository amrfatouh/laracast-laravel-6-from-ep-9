@extends('layout')

@section('content')

  <form action="/images/create" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <input type="submit" value="Submit Image">
  </form>
  @error('image')
    <small style="color: red;">{{ $message }}</small>
  @enderror

@endsection