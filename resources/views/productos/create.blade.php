@extends('layouts.panel')

@section('content')
    <div class="container">
        <h1 class="mb-4">Crear Nuevo Producto</h1>
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
                <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <textarea name="descripcion" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="referencia" class="form-label">Referencia:</label>
                        <input type="text" name="referencia" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" name="precio" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="formato_id" class="form-label">Formato:</label>
                        <select name="formato_id" class="form-select" required>
                            @foreach ($formatos as $formato)
                                <option value="{{ $formato->id }}">{{ $formato->formato }}</option>
                            @endforeach
                        </select>
                    </div>

                    <h5 class="card-title">Categorías</h5>
                    <div class="row">
                        @foreach ($categorias as $categoria)
                            <div class="col-md-2 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoria{{ $categoria->id }}"
                                        name="categorias[]" value="{{ $categoria->id }}">
                                    <label class="form-check-label"
                                        for="categoria{{ $categoria->id }}">{{ $categoria->nombre }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="my-3">
                        <label for="fileUpload" class="form-label">Imagenes:</label>
                        <input type="file" class="form-control d-none" name="imagenes[]" id="fileUpload" accept=".png,.jpg,.jpeg" multiple
                            required>
                        <label class="btn tertiary-killer mx-3" for="fileUpload">Seleccionar imagenes</label>
                        <span id="fileName"></span>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear Producto</button>
                </form>
            </div>
        </div>
    </div>

@endsection
