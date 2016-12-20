<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>C-Documents</title>

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
                /*align-items: center;*/
                display: flex;
                /*justify-content: center;*/
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
                text-decoration: hidden;
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
              border-radius: 25px;
              visibility: hidden;
              animation: fadeIn 0.3s;
              max-height: 200px;
            }


          .barra_lateral{
            background-color: transparent;
            position: fixed;
            top: 25px;
            left: 0;
            width:125px;
            height: 300px;
          }

          .tab {
            height: 100px;
            color: white
          }
          .buttons {
            border: 0;
  padding-top: 50px ;
            text-decoration: hidden;
            border-color: transparent;
            color:red;
            background-color: transparent;
          }

          @keyframes fadeIn {
    from { opacity: 0; }
      to { opacity: 1; }
}
.loggedin{
background-color: #494a4a;
color:white;

}
.panel-body {
border-radius:5px;
}

.rd-dv::before {
	content: "";
	width: 0px;
	height: 0px;
	border: 0.8em solid transparent;
	position: absolute;
}

        </style>
    </head>
    <body >
      <!-- <div class="fondo flex-center">
        <video src="/images/342241033.mp4" autoplay width="90%">

        </video>


      </div> -->
      <div class="barra_lateral container"
>

        <button type="button" name="button" class="buttons" id="button1" onclick="showDiv1();" >
        <div class="tab center">

Documents

        </div></button>
        <hr>
        <button type="button" name="button" class="buttons" id="button2" onclick="showDiv2();"  >
        <div class="tab center">

Transmittals

        </div></button>
        <hr>
         <button type="button" name="button" class="buttons" id="button3" onclick="showDiv3();"  >
          <div class="tab center">

  Reports

          </div></button>
          <hr>

      </div>


        <div class="flex-center position-ref full-height container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                          <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}" style="color:lightgrey;">Register</a>
                    @endif
                </div>
            @endif





            <div class=" rd-dv col-xs-12" style="position:fixed; top:270px; left:10%" id="div4">
              <b style="font-size:2em;font-weight:bolder;font-family:Oswald;padding:none;display:block">
              @if (!Auth::check())  PLEASE LOGIN     @endif
              @if (Auth::check())  YOU ARE LOGGED IN!    @endif
              </b>
            </div>

                <!-- SIXTH EXAMPLE -->
                <div class="rd-dv view view-sixth col-xs-12 col-md-3" id="div1">
                    <img id="imgdiv1" src="./images/blueprint.jpg" style="padding:none;display:block;height:110%"/>
                    <div class="view">
                        <h2>Documents</h2>

                    </div>
                    <div class="mask">
                        <h2>Documents</h2>
                        <p>Project documents</p>
                        <a href="/documents/create" class="info">Create</a>
                        <a href="/documents/view" class="info">View List</a>
                    </div>
                </div>

                <div class="rd-dv view view-sixth  col-xs-12 col-md-3" id="div2" >
                    <img id="imgdiv2" src="./images/transmittal.jpg" style="padding:none;display:block"/>

                    <div class="mask">
                        <h2>Transmittals</h2>
                        <p>Create Transmittals</p>
                        <a href="/transmittals/create" class="info">Here</a>
                    </div>
                </div>

                <div class="rd-dv view view-sixth  col-xs-12 col-md-3" id="div3" >
                    <img id="imgdiv3" src="./images/reports.jpg" style="padding:none;display:block"/>

                    <div class="mask">
                        <h2>Reports</h2>
                        <p>View Reports</p>
                        <a href="/reports/" class="info">Here</a>
                    </div>
                </div>
                    </div>

                    <script type="text/javascript">
                      var button1 = document.getElementById('button1');
                      var button2 = document.getElementById('button2');
                      var button3 = document.getElementById('button3');

                      var div1 = document.getElementById('div1');
                      var div2 = document.getElementById('div2');
                      var div3 = document.getElementById('div3');

                      var imgdiv1 = document.getElementById('imgdiv1');
                      var imgdiv2 = document.getElementById('imgdiv2');
                      var imgdiv3 = document.getElementById('imgdiv3');

                      function hideAllDivs() {
                           div1.style.visibility = 'hidden';
                           div2.style.visibility = 'hidden';
                           div3.style.visibility = 'hidden';
                          }

                     function hideAllDivsinicial() {
                          div1.style.visibility = 'hidden';
                          div2.style.visibility = 'hidden';
                          div3.style.visibility = 'hidden';

                          imgdiv1.src = "";
                          imgdiv2.src = "";
                          imgdiv3.src = "";

                    }
                       function showDiv1() {
                        if(div1.style.visibility == 'hidden')
                        {
                           div1.style.visibility = 'visible';
                           div2.style.visibility = 'hidden';
                           div3.style.visibility = 'hidden';
                        }
                        else
                        {   div1.style.visibility = 'hidden';
                        div2.style.visibility = 'hidden';
                        div3.style.visibility = 'hidden';

                       }

                     }
                      function showDiv2() {
                        if(div2.style.visibility == 'hidden')
                        {
                           div1.style.visibility = 'hidden';
                           div2.style.visibility = 'visible';
                           div3.style.visibility = 'hidden';
                        }
                        else
                        {   div2.style.visibility = 'hidden';
                       }

                     }
                      function showDiv3() {
                        if(div3.style.visibility == 'hidden')
                        {
                           div1.style.visibility = 'hidden';
                           div2.style.visibility = 'hidden';
                           div3.style.visibility = 'visible';
                        }
                        else
                        {   div3.style.visibility = 'hidden';
                       }

                     }

                     var showDivInicial1 = function() {
                       var div1 = document.getElementById('div1');
                       div1.style.visibility ="visible" ;

                     }
                     var showDivInicial2 = function() {
                       var div2 = document.getElementById('div2');
                       div2.style.visibility ="visible" ;
                       div2.style.top="200px";
                     }
                     var showDivInicial3 = function() {
                       var div3 = document.getElementById('div3');
                       div3.style.visibility ="visible" ;
                       div3.style.top="400px";

                     }
                     var showDiv4 = function() {
                       var div4 = document.getElementById('div4');
                       div4.style.visibility ="visible" ;

                     }
                       setTimeout(showDivInicial1, 1000);
                       setTimeout(showDivInicial2, 2500);
                       setTimeout(showDivInicial3, 3500);
                       setTimeout(showDiv4, 5500);
                       setTimeout(hideAllDivsinicial,4500);







                    </script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
