<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>C-Docs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="./css/demo.css" />
        <link rel="stylesheet" type="text/css" href="./css/style_common.css" />
        <link rel="stylesheet" type="text/css" href="./css/style6.css" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url(./images/desk.jpg);
                background-position:center;
                background-clip: content-box;;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .fondo {
              position: fixed;
top: 35px;
margin: auto;

            }
            .rd-dv{
              border-radius: 50px
            }
        </style>
    </head>
    <body >
      <!-- <div class="fondo flex-center">
        <video src="/images/342241033.mp4" autoplay width="90%">

        </video>


      </div> -->

        <div class="flex-center position-ref full-height container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif






              <div class="rd-dv">
                  <img src="./images/logo_white.jpg " alt=""height ="100px" style="border-radius:10px;margin-right:200px">
              </div>
                <!-- SIXTH EXAMPLE -->
                <div class="rd-dv view view-sixth col-xs-12 col-md-3">
                    <img src="./images/blueprint.jpg" style="padding:none;display:inline-block;height:110%"/>

                    <div class="mask">
                        <h2>Documents</h2>
                        <p>Here you can create documents</p>
                        <a href="/documents/create" class="info">New Document</a>
                    </div>
                </div>

                <div class="rd-dv view view-sixth  col-xs-12 col-md-3">
                    <img src="./images/transmittal.jpg" style="padding:none;display:inline-block"/>

                    <div class="mask">
                        <h2>Transmittals</h2>
                        <p>Here you can create Transmittals</p>
                        <a href="/transmittals/create" class="info">New Transmittal</a>
                    </div>
                </div>

                <div class="rd-dv view view-sixth  col-xs-12 col-md-3">
                    <img src="./images/reports.jpg" style="padding:none;display:inline-block"/>

                    <div class="mask">
                        <h2>Reports</h2>
                        <p>Here you can view Reports</p>
                        <a href="/reports/" class="info">Enter</a>
                    </div>
                </div>
                    </div>
    </body>
</html>
