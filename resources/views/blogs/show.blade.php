@extends('layouts.master')

@section('content')
  @include('partials.errors')
  <h2>{{ $blog->title }}</h2>
  <p>By {{ $user->name }}</p>

  <p> {{ $blog->text }}</p>

  @if(!Auth::guest() && ($blog->user_id == Auth::user()->id))
    <p> {!! Form::model($blog, ['method' => 'GET', 'action' => ['BlogsController@edit', $blog->id]]) !!}
          {!! Form::submit('Edit Blog', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </p>
    <p> {!! Form::model($blog, ['method' => 'DELETE', 'action' => ['BlogsController@destroy', $blog->id]]) !!}
          {!! Form::submit('Delete Blog', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </p>
  @endif

@endsection
