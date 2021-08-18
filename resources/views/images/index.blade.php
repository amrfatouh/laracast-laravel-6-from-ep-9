@extends('layout')

@section('content')

  @forelse ($images as $image)
    <img src="/images/{{ $image->name }}" alt="bla">
  @empty
    <h2>No Images</h2>
  @endforelse

@endsection