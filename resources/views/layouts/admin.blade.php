<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coruja System - Admin </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <meta name="csrf-token" content="{{ csrf_token() }}">


    @livewireStyles
</head>

<body>

    <div class="d-flex h-100 w-100">

        @section('admin_sidebar')
        <aside class="sidebar">
            <div class="sidebar-brand">
                <a href="#">
                    <img src="{{ asset('images/coruja-grande.webp') }}" alt="">
                </a>
            </div>

            <ul class="sidebar-nav">
                <a href="{{ url('/admin') }}" >
                    <li class="sidebar-item">
                        Dashboard
                    </li>
                </a>

                <a href="{{ url('/admin/escola') }}" >
                    <li class="sidebar-item">
                        Escolas
                    </li>
                </a>
            </ul>
        </aside>
        @show

        <div class="d-flex flex-column w-100">
            <div class="p-4 d-flex flex-column">
                @yield('content')
            </div>
        </div>

    </div>

    <script src="{{ mix('js/app.js')}}"></script>
    @livewireScripts

    <script>
        window.addEventListener('load', function(){
            const route = window.location.href;
            const links = document.querySelectorAll('.sidebar-item');

            links.forEach(link => {
                if(link.parentElement.href == route){
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>
