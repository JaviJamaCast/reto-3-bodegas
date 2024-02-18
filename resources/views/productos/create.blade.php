@extends('layouts.panel')

@section('content')
    <div class="container">
        <h1>Crear Nuevo Producto</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="referencia">Referencia:</label>
                <input type="text" name="referencia" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="formato_id">Formato:</label>
                <select name="formato_id" class="form-control" required>
                    @foreach ($formatos as $formato)
                        <option value="{{ $formato->id }}">{{ $formato->formato }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Categorías:</label><br>
                @foreach ($categorias as $categoria)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="categoria{{ $categoria->id }}"
                            name="categorias[]" value="{{ $categoria->id }}">
                        <label class="form-check-label" for="categoria{{ $categoria->id }}">{{ $categoria->nombre }}</label>
                    </div>
                @endforeach
            </div>

            <div class="form-group">
                <label for="imagenes">Imágenes:</label>
                <input type="file" name="imagenes[]" class="form-control-file" accept=".png,.jpg,.jpeg" multiple
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Crear Producto</button>
        </form>

    </div>
@endsection
