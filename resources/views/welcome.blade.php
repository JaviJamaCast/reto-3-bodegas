@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="carruselWelcome" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carruselWelcome" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carruselWelcome" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carruselWelcome" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/images/carrusel1.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5>{{ __('welcome.carruselL1') }}</h5>
                            <p>{{ __('welcome.carruselM1') }}</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ asset('/images/carrusel2.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption  d-md-block">
                            <h5>{{ __('welcome.carruselL2') }}</h5>
                            <p>{{ __('welcome.carruselM2') }}</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/images/carrusel3.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption  d-md-block">
                            <h5>{{ __('welcome.carruselL3') }}</h5>
                            <p>{{ __('welcome.carruselM3') }}</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carruselWelcome" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carruselWelcome" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                </button>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container mt-5">
                <div class="row bg-white opacity-75 p-4">
                    <div class="col-md-7">
                        <h2 class="col-sm fs-1"><strong>{{ __('welcome.sobreNosotros') }}</strong></h2>
                        <p class="col-sm fs-5 col-md fs-3">{{ __('welcome.sobreNosotrosM1') }}</p>
                        <p class="col-sm fs-5 col-md fs-3">{{ __('welcome.sobreNosotrosM2') }}</p>
                        <p class="col-sm fs-5 col-md fs-3"> {{ __('welcome.sobreNosotrosM3') }}<a href="#"
                                class="text-decoration-none">{{ __('welcome.sobreNosotrosLink') }}</a> </p>
                    </div>
                    <div class="col-md-5 my-2">
                        <img src="{{ asset('/images/Logo.png') }}" class="rounded float-end img-fluid" alt="{{ __('welcome.sobreNosotros') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <div class="container mt-5">
                <h2 class="text-white"></h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-white opacity-90 p-2 m-1">
                            <img src="{{ asset('/images/Ambar.png') }}" class="card-img-top img-fluid" alt="{{ __('welcome.producto') }} 1">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('welcome.producto1') }}</h5>
                                <p class="card-text">{{ __('welcome.producto1M') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-white opacity-90 p-2 m-1">
                            <img src="{{ asset('/images/Rubia.png') }}" class="card-img-top img-fluid" alt="{{ __('welcome.producto') }} 2">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('welcome.producto2') }}</h5>
                                <p class="card-text">{{ __('welcome.producto2M') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-white opacity-90 p-2 m-1">
                            <img src="{{ asset('/images/Negra.png') }}" class="card-img-top img-fluid" alt="{{ __('welcome.producto') }} 3">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('welcome.producto3') }}</h5>
                                <p class="card-text">{{ __('welcome.producto3M') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-white">{{ __('welcome.testimonioL') }}</h2>
                    </div>
                    <div id="carouselTestimonials" class="col-12 carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('/images/Testimonios1.png') }}" class="d-block w-100"
                                    alt="{{ __('welcome.testimonio') }} 1">
                                <div class="carousel-caption d-md-block">
                                    <p>
                                        {{ __('welcome.testimonio1M') }}
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/images/Testimonios2.png') }}" class="d-block w-100"
                                    alt="{{ __('welcome.testimonio') }} 2">
                                <div class="carousel-caption d-md-block">
                                    <p>{{ __('welcome.testimonio2M') }}</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
