<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stephi Place</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            a {
                color: #008bd2 !important ;

            }

            
        </style>
    </head>
    <body  style="background-image: url('https://nsa40.casimages.com/img/2020/05/28/200528105052418715.jpg');background-repeat: no-repeat;background-size: cover;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">    
            <div class="container">
                <a class="navbar-brand" href='#'>
                    <img style="height:60px; width:50px;" src='https://nsa40.casimages.com/img/2020/05/27/200527044300192958.png'/>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                           
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container fixed-bottom" style="width: 770px;background-color: #ffffff;border-radius:10px;">
            <h1 style="padding-right: 0px;padding-left: 0px;margin-bottom: 30px;margin-top: 6px;">Stephi Place Estate</h1>
            <p>Stephi Place Real Estate est un réseau d'agences immobilières britannique.</p>
            <div class="input-group">
                <div class="input-group-prepend"></div><input class="form-control" type="text">
                <div class="input-group-append"><button class="btn btn-primary" type="submit">Rechercher</button></div>
            </div>
            <p style="margin-top: 20px;">Biens à la une :&nbsp;</p>
            <div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col"><img src="https://nsa40.casimages.com/img/2020/05/28/200528095411889891.png"></div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h5>Maison ultra moderne</h5>
                                <div class="row">
                                    <div class="col">
                                        <p style="margin-top: -6px;">Superficie : 300m²</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p style="margin-top: -17px;">Localisation : Puyricard, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col offset-xl-0">
                        <div class="row">
                            <div class="col offset-xl-6" style="font-size: 21px;">
                                <p style="color: #008bd2;">900 000€</p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 44px;">
                            <div class="col-xl-7 offset-xl-5"><button class="btn btn-primary" type="button" style="background-color: #008bd2;">Voir ce bien !</button></div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col"><img src="https://nsa40.casimages.com/img/2020/05/28/200528095455343155.png" style="height:130px; width:217px;"></div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h5>Appartement centre ville</h5>
                                <div class="row">
                                    <div class="col">
                                        <p style="margin-top: -6px;">Superficie : 170m²</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 offset-xl-0">
                                        <p style="margin-top: -17px;">Localisation : Aix en Provence, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col offset-xl-0">
                        <div class="row">
                            <div class="col offset-xl-6" style="font-size: 21px;">
                                <p style="color: #008bd2;">420 000€</p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 44px;">
                            <div class="col-xl-7 offset-xl-5"><button class="btn btn-primary" type="button" style="background-color: #008bd2;">Voir ce bien !</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
