<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hire Me</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans flex flex-col">
    <header class="text-gray-600 body-font">
        @include('layouts.header')
    </header>
    <div class="flex-grow bg-gray-50">
        @yield('content')
    </div>
    <footer class="text-gray-600 body-font">
        @include('layouts.footer')
    </footer>
</body>
</html>
