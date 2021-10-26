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

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>

    </head>
    <body>
        @extends('layouts.footer')
        @extends('sections.calendar')
        @extends('sections.activityDescription')
        @extends('sections.circles')
        @extends('sections.videoImage')
        @extends('layouts.header')
    </body>
</html>
