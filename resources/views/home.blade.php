@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                @auth
                    <div class="row welcome-message p-2 p-md-4 mb-4 bg-primary-killer border rounded m-2 m-md-4">
                        <h2 class="h4 md:h3 lg:display-4"><strong>{{ __('home.bienvenido') }}</strong></h2>
                        <p class="lead">{{ __('home.holaM') }}, <strong>{{ auth()->user()->nombre_usuario }}</strong>. {{ __('home.messageHola') }} </p>
                        <hr class="my-2">
                        <p>{{ __('home.parrafo1') }}</p>
                        <p>{{ __('home.parrafo2') }}</p>

                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-10 col-md-4 col-lg-3 mb-3">
                            <div class="card shadow-sm text-center bg-tertiary-killer bg-gradient text-white">
                                <div class="card-body p-3">
                                    <h5 class="card-title mb-2 color-primary-killer">{{ __('home.gProductos') }}</h5>
                                    <a href="{{ route('productos.index') }}"" class="d-block mb-3">
                                        <i class="bi bi-list-check fs-1 color-secondary-killer"></i>
                                    </a>
                                    <a href="{{ route('productos.index') }}"class="btn btn-sm primary-killer-out">{{ __('home.entrarB') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-4 col-lg-3 mb-3">
                            <div class="card shadow-sm text-center bg-tertiary-killer bg-gradient text-white">
                                <div class="card-body p-3 ">
                                    <h5 class="card-title mb-2 color-primary-killer">{{ __('home.gClientes') }}</h5>
                                    <a href="#" class="d-block mb-3">
                                        <i class="bi bi-people fs-1 color-secondary-killer"></i>
                                    </a>
                                    <a href="" class="btn btn-sm primary-killer-out">{{ __('home.entrarB') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-4 col-lg-3 mb-3">
                            <div class="card shadow-sm text-center bg-tertiary-killer bg-gradient text-white">
                                <div class="card-body p-3 ">
                                    <h5 class="card-title mb-2 color-primary-killer">{{ __('home.gPedidos') }}</h5>
                                    <a href="#" class="d-block mb-3">
                                        <i class="bi bi-cart fs-1 color-secondary-killer"></i>
                                    </a>
                                    <a href="" class="btn btn-sm primary-killer-out">{{ __('home.entrarB') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-4 col-lg-3 mb-3">
                            <div class="card shadow-sm text-center bg-tertiary-killer bg-gradient text-white">
                                <div class="card-body p-3">
                                    <h5 class="card-title mb-2 color-primary-killer">{{ __('home.gUsuarios') }}</h5>
                                    <a href="#" class="d-block mb-3">
                                        <i class="bi bi-person fs-1 color-secondary-killer"></i>
                                    </a>
                                    <a href="" class="btn btn-sm primary-killer-out">{{ __('home.entrarB') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-4 col-lg-3 mb-3">
                            <div class="card shadow-sm text-center bg-tertiary-killer bg-gradient text-white">
                                <div class="card-body p-3">
                                    <h5 class="card-title mb-2 color-primary-killer">{{ __('home.gEstadisticas') }}</h5>
                                    <a href="#" class="d-block mb-3">
                                        <i class="bi bi-graph-up fs-1 color-secondary-killer"></i>
                                    </a>
                                    <a href="" class="btn btn-sm primary-killer-out">{{ __('home.entrarB') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>

        </div>
    </div>
@endsection
