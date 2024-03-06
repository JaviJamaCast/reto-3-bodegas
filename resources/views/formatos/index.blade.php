@extends('layouts.panel')

@section('content')
    <div class="container mb-5">
        <div class="d-flex justify-content align-items-center my-3 mx-md-3  ">

            <h1 class="m-1 mx-md-3 custom-shadow">{{ __('formato.indiceL') }}</h1>
            <a href="{{ route('formatos.create') }}" class="m-2 mx-md-2 btn primary-killer"><i
                    class="bi bi-plus-lg fs-3"></i></a>
            <a href="{{ route('productos.index') }}" class="m-2 mx-md-2 btn primary-killer">{{ __('producto.volverBt') }}</a>
        </div>
        <div class="row">
            @foreach ($formatos as $formato)
                <div class="col-md-4 col-lg-2 mb-3">
                    <div class="card cardClass">
                        <div class="card-body">
                            <h5 class="card-title">{{ $formato->formato }}</h5>
                            <div class="d-flex justify-content align-items-center mt-2">
                                <a href="{{ route('formatos.edit', $formato) }}" class="btn tertiary-killer"><i
                                    class="bi bi-pencil fs-5"></i></a>
                                <form id="{{ $formato->id }}" action="{{ route('formatos.destroy', $formato->id) }}"
                                    method="POST">
                                    @csrf
                                    <button type="button" class="btn btn-danger delete-button mx-3"
                                        data-id="{{ $formato->id }}">
                                        <i class="bi bi-trash fs-5"></i>
                                    </button>
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $formatos->links() }}
            </div>
        </div>
    </div>
@endsection
