@extends('layouts.panel')

@section('content')
    <div class="container mb-5">
        <h1 class="custom-shadow m-4">{{ __('cliente.editarCliente') }}</h1>
        <a href="{{ route('clientes.index') }}" class="btn tertiary-killer my-2">{{ __('cliente.volverBt') }}</a>
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
                <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="codigo_acceso" class="form-label">{{ __('cliente.codigoAcceso') }}</label>
                        <input type="text" name="codigo_acceso" class="form-control" value="{{ Crypt::decrypt($cliente->codigo_acceso) }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{ __('cliente.nombre') }}</label>
                        <input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellidos" class="form-label">{{ __('cliente.apellidos') }}</label>
                        <input type="text" name="apellidos" class="form-control" value="{{ $cliente->apellidos }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{ __('cliente.telefono') }}</label>
                        <input type="text" name="telefono" class="form-control" value="{{ $cliente->telefono }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">{{ __('cliente.direccion') }}</label>
                        <input type="text" name="direccion" class="form-control" value="{{ $cliente->direccion }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('cliente.email') }}</label>
                        <input type="email" name="email" class="form-control" value="{{ $cliente->email }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="foto_perfil" class="form-label">{{ __('cliente.fotoPerfil') }}</label>
                        <input type="file" name="foto_perfil" class="form-control" accept="image/*">
                    </div>

                    <button type="submit" class="btn primary-killer">{{ __('cliente.guardarC') }}</button>
                </form>
            </div>
        </div>

    </div>
@endsection
