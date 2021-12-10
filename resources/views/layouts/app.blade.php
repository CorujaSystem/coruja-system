<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Campanha Dona Coruja</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ mix('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css')}}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        @livewireStyles

        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
        @section('navbar')
        <nav class="navbar">
            <div class="navbar__items">
                <img src="{{ asset('images/coruja-pequena.svg') }}" alt="">
                <a class="navbar__items--link" href="">Galeria de fotos</a>
                <a class="navbar__items--link" href="">Sobre nós</a>
                <a class="navbar__items--link" href="">Doações</a>
            </div>
            <button class="btn-contato navbar__button"> Entrar em contato </button>
        </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
        
        <script src="{{ mix('js/app.js')}}"></script>
        @livewireScripts
    </body>
</html>