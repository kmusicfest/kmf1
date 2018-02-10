<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials.meta')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>kmusicfest</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #111111;
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
                margin-bottom: 80px;

            }

            .title {
                font-size: 84px;
                
            }

            .links > a {
                color: #ffffff;
                padding:0px 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" >
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content" style="padding-bottom: 50px;">
                <div class="title m-b-md">
                </div>
                    <img src="/img/kmfmid.png">
                
               <div class="links" style="padding-top: 100px;">
                   <a href="/about">About</a>
                    <a href="/gallery">Gallery</a>
                    <a href="/contact">Contact</a>
                    <a href="http://kmusicfest.tk/e/1/bts-armia">Tickets</a>
                    
                </div>         
            </div>
        </div>
    </body>
</html>
