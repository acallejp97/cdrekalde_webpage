<!DOCTYPE html>
<html lang="{{ App::getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        @extends('layouts.footer')
        @extends('sections.calendar')
        @extends('sections.activityDescription')
        @extends('sections.circles')
        @extends('sections.videoImage')
        @extends('layouts.header')
    </body>
            <script src="{{ asset('js/app.js') }}"></script>
</html>
