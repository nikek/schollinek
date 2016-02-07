@extends('app')

@section('content')
    <div class="container1">
      <div class="ribbon-wrap">
        <h1 class="title ribbon">
          <i></i>
          <i></i>
          <i></i>
          <i></i>
          <em>EMMA</em>
          <span class="ampersand">&</span>
          <em>HENRIK</em>
        </h1>
      </div>
    </div>
    <div class="container2 zigzag">
      @if (Auth::guest())
          @include('onepass')
      @else
          @include('info')
      @endif
    </div>
    <div class="container3 zigzag page-footer">
      <h6>#SCHOLLINEK</h6>
    </div>
@stop
