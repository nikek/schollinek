<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Schollin Ek</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab|Alice' rel='stylesheet' type='text/css'>

        <style>

            .light-blue { color: #1BB6E9}
            .blue { color: #034DA9}
            .dark-blue { color: #0E3285}

            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
            }

            h1, h2, h3, h4, h5, h6 { font-family: 'Roboto Slab', serif; text-transform: uppercase;}

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
                font-size: 50px;
                margin: 10px auto;
            }

            .ribbon > em { font-style: normal; transform: scaleX(.6); display: inline-block; }
            .title > em:first-of-type::before, .title > em:last-of-type::after {
              content: '';
              color: #0E3285;
              display: block;
              position: absolute;
              left: -75px;
              border-top: 2px solid #0E3285;
              width: 56px;
              top: 50%;
            }
            .title > em:last-of-type::after { left: auto; right: -75px;}

            .title > span.ampersand {
              font-family: 'Alice', serif;
              font-size: 89px;
              position: absolute;
              display: inline-block;
              transform: translate(-42px, -16px);
              font-weight: 100;
              color: #0E3285;
            }

            .title > span:not(.ampersand) {
              border-top: 2px solid #0E3285;
              display: inline-block;
              width: 100px;
            }

            a, button, input, select, textarea, label, summary {
              touch-action: manipulation;
            }

            .ribbon-wrap {
              position: relative;
              z-index: 10;
            }

            .ribbon {
              display: inline-block;
              height: 60px;
              padding: 0 40px;
              position: relative;
              color: #1BB6E9;
              text-align: center;
              text-transform: uppercase;
              background: #fff;

              -webkit-animation: main 250ms;
              -moz-animation: main 250ms;
              -ms-animation: main 250ms;
              animation: main 250ms;
            }


            .ribbon i {
              position: absolute;
            }

            .ribbon i:nth-child(1), .ribbon i:nth-child(2) {
              position: absolute;
              left: -20px;
              bottom: -20px;
              z-index: -1;
              border: 20px solid transparent;
              border-right-color: #0E3285;

              -webkit-animation: edge 500ms;
              -moz-animation: edge 500ms;
              -ms-animation: edge 500ms;
              animation: edge 500ms;
            }

            .ribbon i:nth-child(2) {
              left: auto;
              right: -20px;
              border-right-color: transparent;
              border-left-color: #0E3285;
            }

            .ribbon i:nth-child(3), .ribbon i:nth-child(4) {
              width: 40px;
              bottom: -20px;
              left: -50px;
              z-index: -2;
              border: 30px solid #1BB6E9;
              border-left-color: transparent;
              border-right-width: 40px;
              transform: scaleX(.9);

              -webkit-animation: back 600ms;
              -moz-animation: back 600ms;
              -ms-animation: back 600ms;
              animation: back 600ms;

              -webkit-transform-origin: 100% 0;
              -moz-transform-origin: 100% 0;
              -ms-transform-origin: 100% 0;
              transform-origin: 100% 0;
            }

            .ribbon i:nth-child(4) {
              bottom: -20px;
              left: auto;
              right: -50px;
              border: 30px solid #1BB6E9;
              border-left-width: 40px;
              border-right-color: transparent;

              -webkit-transform-origin: 0 0;
              -moz-transform-origin: 0 0;
              -ms-transform-origin: 0 0;
              transform-origin: 0 0;
            }


            .ribbon-blue {
              background: #034DA9;
              color: white;
              height: 40px;
            }
            .ribbon-blue i {
              border-width: 20px;
            }

            .ribbon-blue i:nth-child(1), .ribbon-blue i:nth-child(2) {
              bottom: -15px;
              left: -15px;
              border-width: 15px; }
            .ribbon-blue i:nth-child(2) { left: auto; right: -15px; }
            .ribbon-blue i:nth-child(3), .ribbon-blue i:nth-child(4) {
              bottom: -15px;
              left: -35px;
              border-width: 20px;
              border-right-width: 30px;
            }
            .ribbon-blue i:nth-child(4) { left: auto; right: -35px; border-width: 20px; border-left-width: 30px;}

            .page-footer { color: white; }
            .page-footer h6 { display: inline-block; position: relative; top: 5px;}
            /* animations */

            @-webkit-keyframes main {
              0% { -webkit-transform: scaleX(0); }
              100% { -webkit-transform: scaleX(1); }
            }

            @-webkit-keyframes edge {
              0%, 50% { -webkit-transform: scaleY(0); }
              100% { -webkit-transform: scaleY(1); }
            }

            @-webkit-keyframes back {
              0%, 75% { -webkit-transform: scaleX(0); }
              100% { -webkit-transform: scaleX(1); }
            }


            @-moz-keyframes main {
              0% { -moz-transform: scaleX(0); }
              100% { -moz-transform: scaleX(1); }
            }

            @-moz-keyframes edge {
              0%, 50% { -moz-transform: scaleY(0); }
              100% { -moz-transform: scaleY(1); }
            }

            @-moz-keyframes back {
              0%, 75% { -moz-transform: scaleX(0); }
              100% { -moz-transform: scaleX(1); }
            }


            @keyframes main {
              0% { transform: scaleX(0); }
              100% { transform: scaleX(1); }
            }

            @keyframes edge {
              0%, 50% { transform: scaleY(0); }
              100% { transform: scaleY(1); }
            }

            @keyframes back {
              0%, 75% { transform: scaleX(0); }
              100% { transform: scaleX(1); }
            }


            .container1 {
              width: 100%;
              height: 115px;
              background: #1D53C0;
            }
            .zigzag {
              position: relative;
              width: 100%;
              height: 200px;
            }
            .zigzag:before {
              content: "";
              display: block;
              position: absolute;
              z-index:0;
              top: -10px;
              width: 100%;
              height: 10px;
            }
            .container2 {
              background: #fff;
              min-height: 80vh;
            }
            .container2:before {
              background:
                linear-gradient(
                  45deg, transparent 33.333%,
                  white 33.333%, white 66.667%,
                  transparent 66.667%
                ),
                linear-gradient(
                  -45deg, transparent 33.333%,
                  white 33.333%, white 66.667%,
                  transparent 66.667%
                );
              background-size: 20px 40px;
            }
            .container3 {
              background: #1D53C0;
            }
            .container3:before {
              background:
                linear-gradient(
                  45deg, transparent 33.333%,
                  #1D53C0 33.333%, #1D53C0 66.667%,
                  transparent 66.667%
                ),
                linear-gradient(
                  -45deg, transparent 33.333%,
                  #1D53C0 33.333%, #1D53C0 66.667%,
                  transparent 66.667%
                );
              background-size: 20px 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
          @yield('content')
        </div>
    </body>
</html>
