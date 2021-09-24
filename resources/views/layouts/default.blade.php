<!DOCTYPE html>
<html lang="{{ App::getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
        </style>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>

    </head>
    <body>
        <div class="flex-center position-ref full-height container">
            <div>
                <li style="display:inline-flex; float:right; margin-right:2em;">
                    <a href="{{ route('change_lang', ['lang' => 'es']) }}"> <img src='{{ asset('images/idiomas/castellano.png') }}' class='img-responsive ' style='margin-right: 6px; margin-top:0.2em; height:29px; width: 30px;' /></a>
                    <a href="{{ route('change_lang', ['lang' => 'en']) }}"><img src='{{ asset('images/idiomas/ingles.png') }}' class='img-responsive' style=' margin-right: 6px; height:35px; width: 30px;' /></a>
                    <a href="{{ route('change_lang', ['lang' => 'eu']) }}"><img src='{{ asset('images/idiomas/euskera.png') }}' class='img-responsive' style=' margin-right: 6px; height:35px; width: 30px;' /></a>
                </li>
            </div>
            <main>
            @yield('content')
                <script src="{{ asset('js/app.js') }}" defer></script>

            </main>

            <div class="links">
                <a href="{{ route('inicio') }}">@lang('header.inicio')</a>
                <a href="{{ route('galeria') }}">@lang('header.galeria')</a>
                <a href="{{ route('servicios') }}">@lang('header.servicios')</a>
                <a href="{{ route('contacto') }}">@lang('header.contacto')</a>
            </div>
        </div>
        <div id="video-intro">
            <video playsinline type="video/mp4" preload="auto" autoplay loop muted class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="{{ asset('images/posiciones-karate.jpg') }}" id="video-background" src="{{ asset('videos/intro-video.mp4') }}" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;"></video>
        </div>
    </body>
</html>
