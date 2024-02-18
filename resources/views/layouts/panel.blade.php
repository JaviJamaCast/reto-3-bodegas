<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<div class="contentPanel">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-2">
                <button class="btn primary-killer" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                    aria-controls="offcanvas">
                    <i class="bi bi-house fs-1 color-quaternary-killer"></i>
                </button>
            </div>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="list-group mb-2">
                        <a href="#" class="list-group-item list-group-item-action py-3 mb-3">Enlace 1</a>
                        <a href="#" class="list-group-item list-group-item-action py-3 mb-3">Enlace 2</a>
                        <a href="#" class="list-group-item list-group-item-action py-3 mb-3">Enlace 3</a>
                        <!-- Agrega más enlaces según sea necesario -->
                    </div>
                </div>
                <div class="offcanvas-footer mb-3">
                    <div class="list-group d-flex flex-row">
                        <div class="dropdown d-inline me-2">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Perfil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                                <li><a class="dropdown-item" href="#">Configuración</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Cerrar sesión</a></li>
                            </ul>
                        </div>

                        <div class="dropdown d-inline">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                id="dropdownLanguage" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ strtoupper(app()->getLocale()) }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                <li><a class="dropdown-item" href="{{ url('language/es') }}">ES</a></li>
                                <li><a class="dropdown-item" href="{{ url('language/en') }}">EN</a></li>
                                <li><a class="dropdown-item" href="{{ url('language/eu') }}">EU</a></li>
                            </ul>
                        </div>
                    </div>
                </div>





            </div>

            <div class="col-12">
                <div class="container-fluid d-flex flex-column justify-content-between content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-bottom text-center p-2 footer">
        © Cervezas Killer
    </div>
</div>

</html>
