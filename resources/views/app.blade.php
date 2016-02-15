<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Schollin Ek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Alice" rel="stylesheet" type="text/css">

    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>
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
      @if (!Auth::guest())
        <nav>
          <a href="/" class="btn btn-link">Info</a>
          <a href="/rsvp" class="btn btn-link">RSVP</a>
        </nav>
      @endif
    </header>
    <div class="main zigzag">
      <div class="konserthuset-wrap">
        <img src="images/konserthuset.svg" alt="Siluett av konserthuset i Gävle.">
      </div>

      @yield('content')

    </div>

    <footer class="footer zigzag">
      <h6>#SCHOLLINEK</h6>
    </footer>
  </body>
</html>
