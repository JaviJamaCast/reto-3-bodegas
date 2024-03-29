@extends('layouts.panel')

@section('content')
    <div class="row d-flex justify-content-center align-items-center  m-4 m-md-3 h-50">

        <div class="card cardClassShow mx-2">
            <div class="row g-0">
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <div class="card-body">
                        <h1 class="card-title">{{ $producto->nombre }}</h1>
                        <p class="card-text"><strong>{{ __('producto.descripcion') }}:</strong> {{ $producto->descripcion }}
                        </p>
                        <p class="card-text"><strong>{{ __('producto.referencia') }}:</strong> {{ $producto->referencia }}
                        </p>
                        <p class="card-text"><strong>{{ __('producto.precio') }}:</strong> $ {{ $producto->precio }}</p>
                        <p class="card-text"><strong>{{ __('producto.formato') }}:</strong> {{ $producto->formato->formato }}
                        </p>
                        <div class="mb-3">
                            <strong>{{ __('producto.productos') }}</strong>
                            <ul class="list-unstyled d-flex flex-wrap">
                                @foreach ($producto->categorias as $categoria)
                                    <li><span class="badge bg-quaternary-killer me-2">{{ $categoria->nombre }}</span></li>
                                @endforeach
                            </ul>
                        </div>

                        <a href="{{ route('productos.index') }}"
                            class="btn tertiary-killer">{{ __('producto.volverBt') }}</a>
                    </div>
                </div>
                <!-- Carrusel de imágenes -->
                <div class="col-md-6 col-lg-6 d-flex justify-content-center align-items-center">
                    @if ($producto->imagenes->count() > 1)
                        <div id="carousel{{ $producto->id }}" class="carousel slide p-3 " data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($producto->imagenes as $index => $imagen)
                                    <div class="carousel-item item-show carousel-prod-show {{ $index == 0 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/' . $imagen->nombre) }}" class="img-fluid"
                                            alt="{{ $producto->nombre }} ">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carousel{{ $producto->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carousel{{ $producto->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @elseif($producto->imagenes->count() == 1)
                        <img src="{{ asset('storage/' . $producto->imagenes->first()->nombre) }}" class="img-fluid rounded"
                            alt="Imagen de producto">
                    @elseif($producto->imagenes->count() == 0)
                        <img src="{{ asset('images/default.jpg') }}" class="img-fluid rounded" alt="Imagen de producto"">
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection


