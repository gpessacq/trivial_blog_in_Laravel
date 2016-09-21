@extends('layouts.master')

@section('content')

<h1>Edit: {{ $blog->title }} </h1>
<br>
{!! Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogsController@update', $blog->id]]) !!}

  <div class="col-md-6">

    @include('partials.errors')
    @include('partials.form', ['submit' => 'Edit Blog'])

  </div>
{!! Form::close() !!}

@endsection
