@extends('layouts.panel')

@section('content')
    <div class="container mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="m-0 custom-shadow">Listado de Productos</h1>
            <a href="{{ route('productos.create') }}" class="btn primary-killer"><i class="bi bi-plus-lg fs-2"></i></a>
            <!-- Botón sin margen inferior -->
        </div>
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col-md-3 mb-4">
                    <div class="card cardClass h-100">
                        @if ($producto->imagenes->count() > 1)
                            <div id="carousel{{ $producto->id }}" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($producto->imagenes as $index => $imagen)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" style="height: 31vh">
                                            <img src="{{ asset('storage/' . $imagen->nombre) }}" class="card-img-top"
                                                alt="{{ $producto->nombre }} style="height: 100px;">
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
                            <img src="{{ asset('storage/' . $producto->imagenes->first()->nombre) }}" class="card-img-top"
                                alt="{{ $producto->nombre }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $producto->nombre }}</strong></h5>
                            <p class="card-text"><strong>Precio:</strong> ${{ $producto->precio }} |
                                <strong>Formato:</strong>
                                {{ $producto->formato->formato }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('productos.show', $producto) }}" class="btn primary-killer"><i class="bi bi-eye fs-5"></i></a>
                                <a href="{{ route('productos.edit', $producto) }}" class="btn tertiary-killer"><i class="bi bi-pencil fs-5"></i></a>
                                <button type="button" class="btn btn-danger delete-button"
                                    data-id="{{ $producto->id }}"><i class="bi bi-trash fs-5"></i></button>
                            </div>
                        </div>



                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center"> <!-- Utilizamos flexbox para centrar los enlaces de paginación -->
                {{ $productos->links() }}
            </div>
        </div>
    </div>
@endsection