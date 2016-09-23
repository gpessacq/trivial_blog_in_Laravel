@extends('layouts.master')

@section('content')
  <h1>Blogs:</h1>
  @include('partials.errors')
  @foreach($blogs as $blog)
    <a href="{{ action('BlogsController@show', [$blog->id]) }}"><h3>{{ $blog->title }}</h3></a>
    <p> {{ $blog->text }}</p>
    <hr>
  @endforeach
@endsection
