@extends('layouts.panel')

@section('content')
    <div class="container mb-5">
        <div class="d-flex justify-content align-items-center my-3 mx-md-3">
            <h1 class="m-1 mx-md-3 custom-shadow">Indice de clientes</h1>
            <a href="{{ route('clientes.create') }}" class="m-2 mx-md-2 btn primary-killer"><i
                    class="bi bi-plus-lg fs-3"></i></a>
            <a href="{{ route('categorias.index') }}" class="m-2 mx-md-2 btn primary-killer">Volver</a>
        </div>
        <div class="row">
            @foreach ($clientes as $cliente)
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card cardClass h-100">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $cliente->nombre }} {{ $cliente->apellidos }}</strong></h5>
                            <p class="card-text">{{ $cliente->email }}</p>
                            <p class="card-text">{{ $cliente->telefono }}</p>
                            <div class="d-flex justify-content-between">
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
                </div>
            @endforeach
            <div class="d-flex justify-content-center"> <!-- Utilizamos flexbox para centrar los enlaces de paginación -->
                {{ $clientes->links() }}
            </div>
        </div>
    </div>
@endsection
