@extends('layouts.panel')

@section('content')
    <div class="container mb-5">
        <div class="d-flex justify-content align-items-center my-3 mx-md-3">
            <h1 class="m-1 mx-md-3 custom-shadow">Indice de clientes</h1>
            <a href="{{ route('clientes.create') }}" class="m-2 mx-md-2 btn primary-killer"><i
                    class="bi bi-plus-lg fs-3"></i></a>

        </div>
        <div class="row">
            @foreach ($clientes as $cliente)
                <div class="col-md-6 col-md-p3 col-lg-3 d-flex justify-content-center mb-4">
                    <div class="card cardClass h-100">
                        <div class="d-flex align-items-start">
                            @if ($cliente->foto_perfil)
                                <img src="{{ asset('storage/' . $cliente->foto_perfil) }}" alt="Foto de perfil"
                                    class="img-fluid rounded-circle p-2" style="width: 80px; height: 80px;">
                            @else
                                <img src="{{ asset('images/default.jpg') }}"alt="Foto de perfil"
                                    class="img-fluid rounded-circle p-2" style="width: 80px; height: 80px;">
                            @endif
                            <div class="card-body p-1">
                                <h5 class="card-title"><strong>{{ $cliente->nombre }} {{ $cliente->apellidos }}</strong>
                                </h5>
                                <p class="card-text">{{ $cliente->email }}</p>
                                <p class="card-text">{{ $cliente->telefono }}</p>

                            </div>
                        </div>
                        <div class="d-flex justify-content-between mx-5 p-2">
                            <a href="{{ route('clientes.show', $cliente) }}" class="btn primary-killer"><i
                                    class="bi bi-eye fs-5"></i></a>
                            <a href="{{ route('clientes.edit', $cliente) }}" class="btn tertiary-killer"><i
                                    class="bi bi-pencil fs-5"></i></a>
                            <form id="{{ $cliente->id }}" action="{{ route('clientes.destroy', $cliente->id) }}"
                                method="POST">
                                @csrf
                                <button type="button" class="btn btn-danger delete-button"
                                    data-id="{{ $cliente->id }}">
                                    <i class="bi bi-trash fs-5"></i>
                                </button>
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center"> <!-- Utilizamos flexbox para centrar los enlaces de paginación -->
                {{ $clientes->links() }}
            </div>
        </div>
    </div>
@endsection
