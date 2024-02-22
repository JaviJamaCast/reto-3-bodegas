@extends('layouts.panel')

@section('content')
    <div class="row d-flex justify-content-center align-items-center trabajaConNosotrosClass m-4 m-md-0">
        <!-- Utiliza min-height 100vh para que tome el alto completo de la pantalla -->
        <div class="card cardClass mx-2"> <!-- Tarjeta con márgenes y ancho máximo -->
            <div class="row g-0">
                <!-- Detalles del producto -->
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <div class="card-body">
                        <h1 class="card-title">{{ $cliente->nombre }}</h1>
                        <p class="card-text"><strong>{{ __('cliente.apellidos') }}:</strong>
                            {{ Crypt::decrypt($cliente->codigo_acceso) }}</p>
                        <p class="card-text"><strong>{{ __('cliente.apellidos') }}:</strong> {{ $cliente->apellidos }}</p>
                        <p class="card-text"><strong>{{ __('cliente.telefono') }}:</strong> {{ $cliente->telefono }}</p>
                        <p class="card-text"><strong>{{ __('cliente.direccion') }}:</strong> {{ $cliente->direccion }}</p>
                        <p class="card-text"><strong>{{ __('cliente.email') }}:</strong> {{ $cliente->email }}</p>
                        <a href="{{ route('clientes.index') }}"
                            class="btn tertiary-killer">{{ __('cliente.volverBt') }}</a>
                    </div>
                </div>
                <!-- Carrusel de imágenes -->
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    @if ($cliente->foto_perfil)
                        <img src="{{ asset('storage/' . $cliente->foto_perfil) }}" class="img-fluid rounded"
                            alt="Imagen de producto" style="max-height: 300px;">
                    @else
                        <img src="{{ asset('images/default.jpg') }}" class="img-fluid rounded" alt="Imagen de perfil"
                            style="max-height: 300px;">
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
