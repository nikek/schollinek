@extends('app')

@section('content')
<div class="">
  <h1>Guests</h1>

  <ul>
    @foreach ($guests as $g)
      <li>name: {{ $g->name }}</li>
    @endforeach
  </ul>
</div>
@stop
