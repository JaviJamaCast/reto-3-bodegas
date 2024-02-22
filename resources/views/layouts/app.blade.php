<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{ asset('images/Logo.png') }}" class="logo" width="55" height="50" alt="Kille Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}"
                        href="{{ route('welcome') }}">{{ __('navBar.home') }} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'catalogo' ? 'active' : '' }}"
                        href="{{ route('catalogo') }}">{{ __('navBar.catalogo') }} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'trabaja' ? 'active' : '' }}"
                        href="{{ route('trabaja') }}">{{ __('navBar.trabaja') }} </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'login' ? 'active' : '' }} " href="{{ route('login') }}">{{ __('auth.login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link  {{ Route::currentRouteName() === 'register' ? 'active' : '' }}" href="{{ route('register') }}">{{ __('auth.register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->nombre_usuario }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end dropdownClass" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item dropdownItemClass" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('auth.logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <!-- Language Selector -->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" v-pre>
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdownClass" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item dropdownItemClass" href="{{ url('language/es') }}">ES</a>
                        <a class="dropdown-item dropdownItemClass" href="{{ url('language/en') }}">EN</a>
                        <a class="dropdown-item dropdownItemClass" href="{{ url('language/eu') }}">EU</a>
                    </div>

                </li>

                <!-- End Language Selector -->
            </ul>
        </div>
    </div>
</nav>

<div  class="container-fluid d-flex flex-column justify-content-between contentLayout" >
    @yield('content')
</div>


<div class="fixed-bottom text-center p-2 footer">
    © Cervezas Killer
</div>


</html>
