<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ page_title($title ?? null) }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>
    <body class="container">
        <div id="app">
            <main class="py-4">
                @yield('content')
            </main>

            <footer class="">
                &copy; Copyright {{ date('Y') }} 
     
                 @if(!Route::is('accueil'))
                     &middot; <a href="#" class="">About Us</a>
                 @endif
            </footer>
        </div>
    </body>
</html>
