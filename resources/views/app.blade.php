<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i&display=swap">

        @if(str_contains(Route::currentRouteName(), 'admin'))
            <script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>

            <script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>
            <link rel="stylesheet" href="/vendor/laraberg/css/laraberg.css">
            <script src="/vendor/laraberg/js/laraberg.js"></script>
        @endif
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
