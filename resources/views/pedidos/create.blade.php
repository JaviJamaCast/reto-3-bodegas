@extends('layouts.panel')

@section('content')
    <div class="container mb-5">
        <h1 class="custom-shadow m-4">{{ __('producto.crearProductoL') }}</h1>
        <a href="{{ route('pedidos.index') }}" class="btn tertiary-killer my-2">{{ __('pedido.volverBt') }}</a>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card cardClass">
            <div class="card-body">
                <form action="{{ route('pedidos.store') }}" method="POST">
                    @csrf

                    <!-- Selector de Cliente -->
                    <div class="mb-3">
                        <label for="cliente_id" class="form-label">Cliente</label>
                        <select class="form-select" name="cliente_id" id="cliente_id" required>
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellidos }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="producto_id" class="form-label d-block">Productos</label>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-grow-1 me-2">
                                <select class="form-select" id="producto_id">
                                    @foreach ($productos as $producto)
                                        <option value="{{ $producto->id }}" dataPrecio="{{ $producto->precio }}">
                                            {{ $producto->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="button" id="agregar_producto" class="btn btn-primary">Agregar Producto</button>
                        </div>
                    </div>

                    <!-- Contenedor para productos agregados dinámicamente -->
                    <div id="productos_agregados" class="mb-3">
                        <!-- Aquí se agregarán los productos dinámicamente -->
                    </div>
                    <input type="hidden" name="total_pedido" id="total_pedido_input" value="0">

                    <div id="total_pedido_container">
                        Total del Pedido: <span id="total_pedido" >$0.00</span>
                    </div>



                    <button type="submit" class="btn primary-killer">{{ __('producto.crearProductoBt') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
