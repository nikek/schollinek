@extends('app')

@section('content')
  @if (Auth::guest())
      @include('onepass')
  @else
      @include('info')
  @endif
@stop
