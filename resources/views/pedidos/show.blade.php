@extends('layouts.panel')

@section('content')
    <div class="row d-flex justify-content-center align-items-center  m-4 m-md-3 h-50">

        <div class="card cardClassShow mx-2">
            <div class="row g-0">
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <div class="card-body">
                        <h1 class="card-title">{{ $pedido->cliente->nombre }}</h1>
                        @foreach ($pedido->productos as $producto)
                            <p class="card-text">{{ $producto->nombre }} {{ $producto->pivot->cantidad }} ud € {{ $producto->precio }}</p>
                        @endforeach
                        <a href="{{ route('pedidos.index') }}" class="btn tertiary-killer">{{ __('pedido.volverBt') }}</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
