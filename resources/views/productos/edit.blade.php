@extends('layouts.panel')

@section('content')
    <div class="container">
        <h1>Editar Producto</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario de edición de productos -->
        <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nombre -->
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
            </div>

            <!-- Descripción -->
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control" rows="3" required>{{ $producto->descripcion }}</textarea>
            </div>

            <!-- Referencia -->
            <div class="form-group">
                <label for="referencia">Referencia:</label>
                <input type="text" name="referencia" class="form-control" value="{{ $producto->referencia }}" required>
            </div>

            <!-- Precio -->
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" class="form-control" value="{{ $producto->precio }}" required>
            </div>

            <!-- Formato -->
            <div class="form-group">
                <label for="formato_id">Formato:</label>
                <select name="formato_id" class="form-control" required>
                    @foreach ($formatos as $formato)
                        <option value="{{ $formato->id }}" {{ $producto->formato_id == $formato->id ? 'selected' : '' }}>
                            {{ $formato->formato }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Categorías -->
            <div class="form-group">
                <label>Categorías:</label><br>
                @foreach ($categorias as $categoria)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="categoria{{ $categoria->id }}"
                            name="categorias[]" value="{{ $categoria->id }}"
                            {{ in_array($categoria->id, $producto->categorias->pluck('id')->toArray()) ? 'checked' : '' }}>
                        <label class="form-check-label"
                            for="categoria{{ $categoria->id }}">{{ $categoria->nombre }}</label>
                    </div>
                @endforeach
            </div>

            <div class="form-group">
                <label>Imágenes Actuales:</label><br>
                @foreach ($producto->imagenes as $imagen)
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="deleteImagenes{{ $imagen->id }}"
                            name="deleteImagenes[]" value="{{ $imagen->id }}">
                        <label class="form-check-label" for="deleteImagenes{{ $imagen->id }}">Eliminar</label>
                        <img src="{{ Storage::url($imagen->nombre) }}" width="100" height="100">
                    </div>
                @endforeach
            </div>

            <!-- Subida de Nuevas Imágenes -->
            <div class="form-group">
                <label for="imagenes">Subir Nuevas Imágenes:</label>
                <input type="file" name="imagenes[]" class="form-control-file" accept=".png,.jpg,.jpeg" multiple>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>

    </div>
@endsection
