@extends('app')

@section('content')
  <div class="container">
    <div class="col-sm-8 col-sm-offset-2 thanks">
      <h2>We'll see you on May 7!</h2>
      <p>A mail has been sent to . If anything changes you reach henrik or emma.</p>
      <a href="/rsvp" class="btn btn-primary">RSVP one more person</a>


      @foreach (array_keys($guest) as $key)
        <p>{{ $key }} - {{ $guest[$key] }}</p>
      @endforeach
    </div>
  </div>
@stop
