@extends('layouts.panel')

@section('content')
    <div class="container mb-5">
        <h1>Editar Producto</h1>
        <a href="{{ route('productos.index') }}" class="btn tertiary-killer my-2">{{ __('producto.volverBt') }}</a>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card cardClass">
            <div class="card-body">
                <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{ __('producto.nombre') }}</label>
                        <input type="text" name="nombre" class="form-control bg-primary-killer" value="{{ $producto->nombre }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">{{ __('producto.descripcion') }}</label>
                        <textarea name="descripcion" class="form-control bg-primary-killer" rows="3" required>{{ $producto->descripcion }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="referencia" class="form-label">{{ __('producto.referencia') }}</label>
                        <input type="text" name="referencia" class="form-control bg-primary-killer" value="{{ $producto->referencia }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">{{ __('producto.precio') }}</label>
                        <input type="number" name="precio" step="any" min="00.1" max="99.99"  class="form-control bg-primary-killer" value="{{ $producto->precio }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="formato_id" class="form-label">{{ __('producto.formato') }}</label>
                        <select name="formato_id" class="form-control bg-primary-killer" required>
                            @foreach ($formatos as $formato)
                                <option value="{{ $formato->id }}"
                                    {{ $producto->formato_id == $formato->id ? 'selected' : '' }}>
                                    {{ $formato->formato }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="card mb-3 bg-primary-killer">
                        <div class="card-body ">
                            <h5 class="card-title">{{ __('producto.categorias') }}</h5>
                            <div class="row">
                                @foreach ($categorias as $categoria)
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="categoria{{ $categoria->id }}" name="categorias[]"
                                                value="{{ $categoria->id }}"
                                                {{ in_array($categoria->id, $producto->categorias->pluck('id')->toArray()) ? 'checked' : '' }}>
                                            <label class="form-check-label"
                                                for="categoria{{ $categoria->id }}">{{ $categoria->nombre }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="imagenes" class="form-label">{{ __('producto.imagenesActuales') }}</label>
                        <div class="row row-cols-1 row-cols-md-4 g-3">
                            @foreach ($producto->imagenes as $imagen)
                                <div class="col">
                                    <div class="card-imagen">
                                        <img src="{{ Storage::url($imagen->nombre) }}" class="card-img-top"
                                            alt="Imagen de Producto">
                                        <div class="card-body">
                                            <input type="checkbox" class="form-check-input"
                                                id="deleteImagenes{{ $imagen->id }}" name="deleteImagenes[]"
                                                value="{{ $imagen->id }}">
                                            <label class="form-check-label"
                                                for="deleteImagenes{{ $imagen->id }}">Eliminar</label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="my-3">
                        <label for="fileUpload" class="form-label">{{ __('producto.subirNuevasImagenes') }}</label>
                        <input type="file" class="form-control d-none" name="imagenes[]" id="fileUpload"
                            accept=".png,.jpg,.jpeg" multiple>
                        <label class="btn tertiary-killer mx-3" for="fileUpload">Seleccionar imagenes</label>
                        <span id="fileName"></span>
                    </div>

                    <button type="submit" class="btn primary-killer">{{ __('producto.guardarC') }}</button>
                </form>
            </div>
        </div>

    </div>
@endsection
