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

                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{ __('producto.nombre') }}</label>
                        <input type="text" name="nombre" class="form-control bg-primary-killer" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">{{ __('producto.descripcion') }}</label>
                        <textarea name="descripcion" class="form-control bg-primary-killer" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="referencia" class="form-label">{{ __('producto.referencia') }}</label>
                        <input type="text" name="referencia" class="form-control bg-primary-killer" required>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">{{ __('producto.precio') }}</label>
                        <input type="number" step="any" name="precio" min="00.1" max="99.99"  class="form-control bg-primary-killer" required>
                    </div>

                    <div class="mb-3">
                        <label for="formato_id" class="form-label">{{ __('producto.formato') }}</label>
                        <select name="formato_id" class="form-select bg-primary-killer" required>
                            @foreach ($formatos as $formato)
                                <option value="{{ $formato->id }}">{{ $formato->formato }}</option>
                            @endforeach
                        </select>
                    </div>

                    <h5 class="card-title">{{ __('producto.categorias') }}</h5>
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
                        <label for="fileUpload" class="form-label">{{ __('producto.imagenes') }}</label>
                        <input type="file" class="form-control d-none" name="imagenes[]" id="fileUpload"
                            accept=".png,.jpg,.jpeg" multiple >
                        <label class="btn tertiary-killer mx-3" for="fileUpload">{{ __('producto.seleccionar') }}</label>
                        <span id="fileName"></span>
                    </div>

                    <button type="submit" class="btn primary-killer">{{ __('producto.crearProductoBt') }}</button>
                </form>

            </div>
        </div>
    </div>

@endsection
