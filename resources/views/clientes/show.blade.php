@extends('layouts.panel')

@section('content')
    <div class="row d-flex justify-content-center align-items-center trabajaConNosotrosClass m-4 m-md-0" style="min-height: 100vh;">
        <div class="card cardClassCli mx-2">
            <div class="card-header d-flex justify-content-center p-0">
                @if ($cliente->foto_perfil)
                    <img src="{{ asset('storage/' . $cliente->foto_perfil) }}" alt="{{ __('cliente.fotoPerfilAlt') }}"  class="rounded mx-auto d-block p-2" style="width: 300px; height: 220px;">
                @else
                    <img src="{{ asset('images/default.jpg') }}" class="img-fluid rounded-top" alt="Imagen de perfil" style="width: 100%; height: auto; max-height: 300px;">
                @endif
            </div>

            <div class="card-body d-flex flex-column justify-content-center">
                <h1 class="card-title">{{ $cliente->nombre }}</h1>
                <p class="card-text"><strong>{{ __('cliente.nombreL') }}:</strong> {{ Crypt::decrypt($cliente->codigo_acceso) }}</p>
                <p class="card-text"><strong>{{ __('cliente.apellidosL') }}:</strong> {{ $cliente->apellidos }}</p>
                <p class="card-text"><strong>{{ __('cliente.telefonoL') }}:</strong> {{ $cliente->telefono }}</p>
                <p class="card-text"><strong>{{ __('cliente.direccionL') }}:</strong> {{ $cliente->direccion }}</p>
                <p class="card-text"><strong>{{ __('cliente.emailL') }}:</strong> {{ $cliente->email }}</p>
                <a href="{{ route('clientes.index') }}" class="btn tertiary-killer">{{ __('cliente.volverBt') }}</a>
            </div>
        </div>
    </div>
@endsection
