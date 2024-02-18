@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="d-flex justify-content align-items-center my-3 mx-md-3  ">
            <h1 class="custom-shadow">{{ __('categoria.editarL') }}</h1>
            <a href="{{ route('categorias.index') }}" class="m-2 mx-md-2 btn primary-killer">{{ __('producto.volverBt') }}</a>
        </div>

        <div class="card cardClass">
            <div class="card-body">
                <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{ __('producto.nombre') }}</label>
                        <input type="text" name="nombre" class="form-control" value="{{ $categoria->nombre }}" required>
                    </div>
                    <button type="submit" class="btn primary-killer">{{ __('categoria.guardarC') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
