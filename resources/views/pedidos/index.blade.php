@extends('layouts.panel')

@section('content')
    <div class="container mb-5">
        <div class="d-flex justify-content align-items-center my-3 mx-md-3  ">
            <h1 class="m-1 mx-md-3 custom-shadow">{{ __('pedido.pedidosL') }}</h1>
            <a href="{{ route('pedidos.create') }}" class="m-2 mx-md-2 btn primary-killer"><i
                    class="bi bi-plus-lg fs-3"></i></a>
        </div>
        <div class="row">
            @foreach ($pedidos as $pedido)
                <div class="col-md-6 col-lg-3 d-flex justify-content-center mb-4">
                    <div class="card cardClassProd">

                        <div class="card-body flex-container">
                            <h5 class="card-title"><strong>{{ $pedido->cliente->nombre }}
                                    {{ $pedido->cliente->apellidos }}</strong></h5>
                            <p class="card-text">{{ $pedido->created_at->translatedFormat(' F j, Y') }}</p>
                            <p class="card-text">{{ $pedido->estado }}</p>
                            <p class="card-text">€ {{ $pedido->total }} </p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('pedidos.show', $pedido) }}" class="btn primary-killer"><i
                                        class="bi bi-eye fs-5"></i></a>
                                <a href="{{ route('pedidos.edit', $pedido) }}" class="btn tertiary-killer"><i
                                        class="bi bi-pencil fs-5"></i></a>


                                <form id="{{ $pedido->id }}" action="{{ route('pedidos.destroy', $pedido->id) }}"
                                    method="POST">
                                    @csrf
                                    <button type="button" class="btn btn-danger delete-button"
                                        data-id="{{ $pedido->id }}">
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
                {{ $pedidos->links() }}
            </div>
        </div>
    </div>
@endsection
