@extends('app')

@section('content')
  <div class="content">
      <h1 class="title">H & E</h1>

      @if (Auth::guest())
          @include('onepass')
      @else
          @include('info')
      @endif
  </div>
@stop
