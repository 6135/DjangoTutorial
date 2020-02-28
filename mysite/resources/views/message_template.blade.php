
@extends('layouts.app')
  @section('loaders')
  <meta http-equiv="refresh" content="3; url={{action('Index@index')}}">
  @endsection
  @section('content')
  <!-- Content -->
  <div class="container mt-5" style="max-width: 50%">
    <div class="alert alert-{{$Type}}">
      <p style="text-align: center">{{$Message}}</p>
    </div>
  </div>
  <!-- EOContent -->
  @endsection
