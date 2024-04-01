@extends('layouts.panel')

@section('content')
    <div class="row d-flex justify-content-center align-items-center m-4 m-md-3 h-50">
        <div class="card cardClassShow mx-2">
            <div class="card-body">
                <h1 class="card-title my-2">{{ $pedido->cliente->nombre }} {{ $pedido->cliente->apellidos }}</h1>
                @if ($pedido->productos->count() > 0)
                    <div class="table-responsive overflow-auto">
                        <table class="table">
                            <thead >
                                <tr>
                                    <th class="bg-tertiary-killer color-primary-killer" >Producto</th>
                                    <th class="bg-tertiary-killer color-primary-killer">Cantidad</th>
                                    <th class="bg-tertiary-killer color-primary-killer">Precio/Unidad</th>
                                    <th class="bg-tertiary-killer color-primary-killer">Precio total</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedido->productos as $producto)
                                    <tr>
                                        <td class="bg-primary-killer">{{ $producto->nombre }}</td>
                                        <td class="bg-primary-killer">{{ $producto->pivot->cantidad }} Unidades</td>
                                        <td class="bg-primary-killer">€ {{ $producto->precio }}</td>
                                        <td class="bg-primary-killer">€ {{ $producto->precio * $producto->pivot->cantidad }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                            <tr>
                                <td colspan="3" class="text-right bg-primary-killer"><strong>Total</strong></td>
                                <td class="bg-primary-killer">€ {{ $pedido->total}} </td>
                            </tr>
                        </table>
                    </div>
                @else
                    <div>
                        <h4 class="text-danger">Error recuperando los productos del pedido</h4>
                    </div>
                @endif
                <a href="{{ route('pedidos.index') }}" class="btn tertiary-killer">{{ __('pedido.volverBt') }}</a>
            </div>
        </div>
    </div>
@endsection
