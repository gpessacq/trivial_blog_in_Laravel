@extends('layouts.master')

@section('content')
  <h1>Blogs:</h1>
  @foreach($blogs as $blog)
    <a href="{{ action('BlogsController@show', [$blog->id]) }}"><h3>{{ $blog->title }}</h3></a>
    <p> {{ $blog->text }}</p>
    <p> {!! Form::model($blog, ['method' => 'DELETE', 'action' => ['BlogsController@destroy', $blog->id]]) !!}
          {!! Form::submit('Delete Blog', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </p>
  @endforeach
@endsection
