@extends('layouts.panel')

@section('content')
    <div class="container mb-5">
        <h1>Listado de Productos</h1>
        <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Crear Producto</a>
        <ul class="list-group">
            @foreach ($productos as $producto)
                <li class="list-group-item">
                    {{ $producto->nombre }}
                    <div class="btn-group float-end" role="group">
                        <a href="{{ route('productos.show', $producto) }}" class="btn btn-info">Mostrar</a>
                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
