@extends('layouts.master')

@section('content')
  @forelse($people as $person)
    {{ $person }}
  @empty
    no one in list
  @endforelse
@endsection
