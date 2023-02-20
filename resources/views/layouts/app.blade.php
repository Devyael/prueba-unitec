<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel App') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <style>
            body {
                background-color: #e5e5f7;
                opacity: 0.8;
                background-image:  linear-gradient(135deg, #7CE1D0 25%, transparent 25%), linear-gradient(225deg, #7CE1D0 25%, transparent 25%), linear-gradient(45deg, #7CE1D0 25%, transparent 25%), linear-gradient(315deg, #7CE1D0 25%, #e5e5f7 25%);
                background-position:  10px 0, 10px 0, 0 0, 0 0;
                background-size: 10px 10px;
                background-repeat: repeat;
            }
        </style>

        <!-- Styles -->
        @yield('styles')
    </head>

    <body>
        <div id="app">
            <main class="vh-100 d-flex align-items-center">
                <!-- Content-general-open -->
                @yield('content')
                <!-- Content-general-closed -->
            </main>
        </div>

        @yield('scripts')
    </body>

    @livewireScripts
</html>
