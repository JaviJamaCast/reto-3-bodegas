@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="d-flex justify-content align-items-center my-3 mx-md-3  ">
            <h1 class="custom-shadow">Crear Nueva Categoría</h1>
            <a href="{{ route('categorias.index') }}" class="m-2 mx-md-2 btn primary-killer">Volver</a>
        </div>
        <div class="card cardClass">
            <div class="card-body">
                <form action="{{ route('categorias.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <button type="submit" class="btn primary-killer">Crear Categoría</button>
                </form>
            </div>
        </div>
    </div>
@endsection
