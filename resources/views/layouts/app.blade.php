<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ page_title($title ?? null) }}</title>

        
        
        
        @if(!Route::is('login'))
        <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
        @endif
        @if(Route::is('login'))
        <!-- Styles -->
            <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Scripts -->
            <script src="{{ asset('js/login.js') }}" defer></script>
        @endif

        <!-- font awasom -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    </head>
    <body class="">
        <div id="app">
            
                @yield('content')
          

            <footer class="">
                
            </footer>
        </div>
    </body>
</html>
