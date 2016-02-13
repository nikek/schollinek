@extends('app')

@section('content')
    <header class="header">
      <div class="ribbon-wrap">
        <h1 class="title ribbon">
          <i></i>
          <i></i>
          <i></i>
          <i></i>
          <em class="title-name title-name-left">EMMA</em>
          <span class="title-ampersand">&</span>
          <em class="title-name title-name-right">HENRIK</em>
        </h1>
      </div>
    </header>
    <div class="main zigzag">
      <div class="konserthuset-wrap">
        <img src="images/konserthuset.svg" alt="Siluett av konserthuset i Gävle.">
      </div>
      @if (Auth::guest())
          @include('onepass')
      @else
          @include('info')
      @endif
    </div>
    <footer class="footer zigzag">
      <h6>#SCHOLLINEK</h6>
    </footer>
@stop
