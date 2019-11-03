<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clucker</title>

        <link rel="stylesheet" href="/css/app.css">

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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



            .m-b-md {
                margin-bottom: 30px;
            }


        </style>

    </head>


    <body>
        <div class="flex-center position-ref full-height">


            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" style=padding:0%>
                        <div class="welcome_text">
                            You’re one step away from the shiny new Clucker.com
                        </div>
                        <div class="welcome_sub">
                            We’ve added tons of cool features, including …
                            CRUD
                            and stuff
                        </div>
                        <img class="welcome_background" src="{{url('/images/background.jpg')}}" alt="Clucker logo background"/>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-md-6">
                        <img class="main-logo" src="{{url('/images/main-logo.png')}}" alt="Clucker logo"/>
                    </div>
                    <div class="col-md-4">
                        @if (Route::has('login'))
                            <div >
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-primary">Log in</button></a>
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
                <br>
                <div class="container-fluid">
                    <div class="row justify-content-end">
                        <div class="col-md-12" >
                            <div class="hhouse_text">
                                See what’s happening in the hen house right now
                            </div>
                        </div>
                    </div>
                </br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hhouse_subtext">
                                Join Clucker today.
                            </div>
                        </div>
                    </div>
                </br>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            @if (Route::has('login'))
                                <div >
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}"><button type="button" class="btn-w btn-primary">Log in</button></a>
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                </br>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <a href="{{ route('register') }}"><button type="button" class="btn-w btn-outline-primary">Sign up</a>
                        </div>
                    </div>

    </body>
</html>
