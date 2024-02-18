@extends('layouts.panel')

@section('content')
    <div class="container">
        <h1 class="mb-4">{{ __('cliente.crearClienteL') }}</h1>
        <a href="{{ route('clientes.index') }}" class="btn tertiary-killer my-2">{{ __('cliente.volverBt') }}</a>
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
                <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="codigo_acceso" class="form-label">Código Acceso</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="codigo_acceso" name="codigo_acceso" readonly required>
                            <button type="button" class="btn tertiary-killer" id="generarCodigo">Generar Código</button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{ __('cliente.nombre') }}</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellidos" class="form-label">{{ __('cliente.apellidos') }}</label>
                        <input type="text" name="apellidos" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{ __('cliente.telefono') }}</label>
                        <input type="text" name="telefono" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">{{ __('cliente.direccion') }}</label>
                        <input type="text" name="direccion" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('cliente.email') }}</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="foto_perfil" class="form-label">{{ __('cliente.fotoPerfil') }}</label>
                        <input type="file" name="foto_perfil" class="form-control" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn primary-killer">{{ __('cliente.crearClienteBt') }}</button>
                </form>

            </div>
        </div>
    </div>

@endsection
