@extends('layouts.panel')

@section('content')
    <div class="container mb-5">
        <div class="d-flex justify-content align-items-center my-3 mx-md-3  ">
            <h1 class="m-1 mx-md-3 custom-shadow">{{ __('producto.productos') }}</h1>
            <a href="{{ route('productos.create') }}" class="m-2 mx-md-2 btn primary-killer"><i
                    class="bi bi-plus-lg fs-3"></i></a>
            <div class="d-none d-md-block">

                <a href="{{ route('categorias.index') }}"
                    class="m-2 mx-md-2 btn primary-killer">{{ __('producto.categoriaL') }}</a>
                <a href="{{ route('formatos.index') }}"
                    class="m-2 mx-md-2 btn primary-killer">{{ __('producto.formatoL') }}</a>
            </div>
            <div class="d-md-none">
                <button class="btn primary-killer dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Menú
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('categorias.index') }}">{{ __('producto.categoriaL') }}</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('formatos.index') }}">{{ __('producto.formatoL') }}</a></li>
                </ul>
            </div>

        </div>
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col-md-6 col-lg-3 d-flex justify-content-center mb-4">
                    <div class="card cardClassProd">
                        @if ($producto->imagenes->count() > 1)
                            <div id="carousel{{ $producto->id }}" class="carousel slide carousel-prod"
                                data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($producto->imagenes as $index => $imagen)
                                        <div class="carousel-item carousel-prod {{ $index == 0 ? 'active' : '' }}">
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
                        @elseif($producto->imagenes->count() == 0)
                            <img src="{{ asset('images/default.jpg') }}" class="card-img-top"
                                alt="{{ $producto->nombre }}">
                        @endif
                        <div class="card-body flex-container">
                            <h5 class="card-title"><strong>{{ $producto->nombre }}</strong></h5>
                            <p class="card-text"><strong>{{ __('producto.precio') }}</strong> ${{ $producto->precio }} |
                                <strong>{{ __('producto.formato') }}</strong>
                                {{ $producto->formato->formato }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('productos.show', $producto) }}" class="btn primary-killer"><i
                                        class="bi bi-eye fs-5"></i></a>
                                <a href="{{ route('productos.edit', $producto) }}" class="btn tertiary-killer"><i
                                        class="bi bi-pencil fs-5"></i></a>


                                <form id="{{ $producto->id }}" action="{{ route('productos.destroy', $producto->id) }}"
                                    method="POST">
                                    @csrf
                                    <button type="button" class="btn btn-danger delete-button"
                                        data-id="{{ $producto->id }}">
                                        <i class="bi bi-trash fs-5"></i>
                                    </button>
                                    @method('DELETE')
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $productos->links() }}
            </div>
        </div>
    </div>
@endsection
