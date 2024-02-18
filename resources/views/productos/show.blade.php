@extends('layouts.panel')

@section('content')
    <div class="container">
        <h1>Detalles del Producto</h1>
        <div>
            <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
            <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
            <p><strong>Referencia:</strong> {{ $producto->referencia }}</p>
            <p><strong>Precio:</strong> {{ $producto->precio }}</p>
            <p><strong>Formato:</strong> {{ $producto->formato->formato }}</p>
            <p><strong>Categorías:</strong></p>
            <ul>
                @foreach ($producto->categorias as $categoria)
                    <li>{{ $categoria->nombre }}</li>
                @endforeach
            </ul>
            <p><strong>Imágenes:</strong></p>
            <div class="row">
                @foreach ($producto->imagenes as $imagen)
                    <div class="col-md-4">
                        <img src="{{asset('storage/' . $imagen->nombre) }}" alt="Imagen de producto" class="img-fluid">
                    </div>
                @endforeach

            </div>
        </div>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
