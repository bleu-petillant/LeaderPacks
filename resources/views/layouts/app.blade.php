<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="description"content="">
        <link rel="alternate" href="rss.xml" type="application/rss+xml" title="RSS">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        @livewireStyles
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
        <link rel="stylesheet" href="{{ asset('css/product.css') }}">
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('js/sal.js/dist/sal.css') }}">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.css'/>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css' />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css'/>
        
        <!-- Scripts -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script> -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/animation.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
    @livewireScripts
        <div class="min-h-screen ">
            @auth
                @include('layouts.navigation')
            @endauth
            <nav x-data="{ open: false }" class="bg-white border-b border-gray-100 navbar navbar-expand-lg">
                <div class="relative menu-content container-fluid">
                <a href="{{route('home')}}" class="nav-logo"><img src="{{asset('img/logo.png')}}" alt="" style="width: 86%;"></a> 
                        <div class="absolute  menu-laptop flex">
                            <a href="{{route('about')}}" class="nav-link">About us</a>
                            <a href="{{route('products')}}" class="nav-link">Products</a>
                            <a href="{{route('contact')}}" class="nav-link">Contact</a>
                            <a class="link-red-user-button" href="#"><span class="fas fa-user nav-user-button bg-red-700 text-white"></span></a>
                        </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <!-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header ?? ''}}
                </div>
            </header> -->

            <!-- Page Content -->
            <main>
                {{ $slot ?? '' }}
                @yield('home')
                @yield('about')
                @yield('products')
                @yield('contact')
            </main>
            
        </div>
    <footer class="flex relative ">
        <div class="">
            <img class="footer-logo" src="{{asset('img/logo-white.svg')}}" alt="">
            <div class="footer-contact">
                <p class="text-white" >Zona de Industria Ligeira <br>
                    Rua Hervé Joseph Matias, Lote 10-A, 7580-250,<br>
                    Alcácer do Sal, Portugal.</p>
                
                <a  class="text-white" href="">06.00.00.00.00</a>
            </div>
        </div>
        <div class=" footer-legale">
            <p class="mention-legale"><a href="">Mentions Légales</a> </p>
            <p>©2021</p>

        </div>


    </footer>
    
    <script src="{{ asset('js/sal.js/dist/sal.js') }}"></script>
    <script>
        sal()
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.js'></script>
    
    @livewireScripts
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    </script>
    </body>

    
</html>
