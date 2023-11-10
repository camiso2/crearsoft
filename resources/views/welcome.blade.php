<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="cv Jaiver Andrés Ocampo">
    <meta name="author" content="Jaiver Ocampo">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jaiver Ocampo</title>

    <!-- Bootstrap core CSS -->
    <link href="cv/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="cv/assets/css/fontawesome.css">
    <link rel="stylesheet" href="cv/assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="cv/assets/css/animated.css">
    <link rel="stylesheet" href="cv/assets/css/owl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <h6>El sitio web  <span id="respon">Está en </span> <span style="color: black">
                                        <b> Construcción</b> </span></h6>
                                <h2>Desarrolle <em>Sus Ideas</em> <i
                                        class="fa fa-assistive-listening-systems"></i><span>Con Un</span> Profesional
                                </h2>
                                
                                    <br>
                                    @include('sections.cv.social_networks')
                                    {{--  <br><a rel="nofollow" href="#portfolio" target="_parent" style="font-size: 22px; font-weight:800; color: #03a4ed"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Ver Más </a>.</p> --}}
                                    <br>

                                    <a rel="nofollow" href="/cv_jaiver" target="_parent"><button class="btn btn-primary"
                                            style="font-size: 22px; font-weight:800;background-color: #03a4ed;border:0;margin:10px;"><i
                                                class="fa fa-plus-circle"></i>&nbsp;&nbsp;Ver Más </button></a>
                                    <a rel="nofollow" href="/cv/jaiver.pdf" target="_blank"><button
                                            class="btn btn-success"
                                            style="font-size: 22px; font-weight:800;border:0;margin:10px;"><i
                                                class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Descargar CV </button></a>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="construccion.jpg" class="rounded-circle"
                                    alt="team meeting">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</body>
</html>


{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="cv_jaiver_ocampo">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
