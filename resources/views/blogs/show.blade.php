@extends('layouts.master')

@section('content')
  <h1>{{ $blog->title }}</h1>
  <p> {{ $blog->text }}</p>
@endsection
