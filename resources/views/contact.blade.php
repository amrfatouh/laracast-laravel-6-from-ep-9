@extends('layout')

@section('content')
  <h3>Contact Us</h3>
  <form action="/contact" method="POST">
    @csrf
    <label for="email">E-mail</label>
    <input type="text" name="email" id="email" autofocus>  
    @error('email')
      <div style="color: red; font-size: 0.8em">{{ $message }}</div>
    @enderror
    @if(session('message'))
    <div style="color: #095; font-size: 0.8em">{{ session('message') }}</div>
    @endif
  </form>
@endsection