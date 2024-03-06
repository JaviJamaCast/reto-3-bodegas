@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="d-flex justify-content align-items-center my-3 mx-md-3  ">
            <h1 class="custom-shadow">{{ __('formato.crearL') }}</h1>
            <a href="{{ route('formatos.index') }}" class="m-2 mx-md-2 btn primary-killer">{{ __('producto.volverBt') }}</a>
        </div>
        <div class="card cardClass">
            <div class="card-body">
                <form action="{{ route('formatos.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="formato" class="form-label">{{ __('formato.formato') }}</label>
                        <input type="text" name="formato" class="form-control" required>
                    </div>
                    <button type="submit" class="btn primary-killer">{{ __('formato.guardarFbn') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
