@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="d-flex justify-content align-items-center my-3 mx-md-3  ">

            <h1 class="m-1 mx-md-3 custom-shadow">Indice de categorias</h1>
            <a href="{{ route('categorias.create') }}" class="m-2 mx-md-2 btn primary-killer"><i
                    class="bi bi-plus-lg fs-3"></i></a>
            <a href="{{ route('productos.index') }}" class="m-2 mx-md-2 btn primary-killer">Volver</a>
        </div>
        <div class="row">
            @foreach ($categorias as $categoria)
                <div class="col-md-4 col-lg-2 mb-3">
                    <div class="card cardClass">
                        <div class="card-body">
                            <h5 class="card-title">{{ $categoria->nombre }}</h5>
                            <div class="d-flex justify-content align-items-center mt-2">
                                <a href="{{ route('categorias.edit', $categoria) }}" class="btn tertiary-killer"><i
                                    class="bi bi-pencil fs-5"></i></a>
                                <form id="{{ $categoria->id }}" action="{{ route('categorias.destroy', $categoria->id) }}"
                                    method="POST">
                                    @csrf
                                    <button type="button" class="btn btn-danger delete-button mx-3"
                                        data-id="{{ $categoria->id }}">
                                        <i class="bi bi-trash fs-5"></i>
                                    </button>
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
