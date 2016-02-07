<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Schollin Ek</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
            }

            h1, h2, h3 { font-family: 'Lato' }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                margin: 20px auto;
            }

            a, button, input, select, textarea, label, summary {
              touch-action: manipulation;
            }
        </style>
    </head>
    <body>
        <div class="container">
          @yield('content')
        </div>
    </body>
</html>
