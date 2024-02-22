@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="row">
                <div class="col-8 d-block d-md-none">
                    <div class="mb-3">
                        <label for="searchFilterMobile" class="form-label text-white">{{ __('catalogo.busqueda') }}</label>
                        <input type="text" class="form-control" id="searchFilterMobile"
                            placeholder={{ __('catalogo.placeholder') }}>
                    </div>
                </div>

                <div class="col-4 d-flex d-block d-md-none align-items-center justify-content-end">
                    <div class="mt-3">
                        <button class="btn primary-killer" id="toggleFiltersButton">{{ __('catalogo.filtrosBtn') }}</button>
                    </div>
                </div>
            </div>



            <div class=" col-12 d-none d-md-block col-md-4 col-lg-3 ">
                <aside class="me-5" id="filtersAside">
                    <h2 class="text-white">{{ __('catalogo.filtrosBtn') }}</h2>

                    <div class="mb-3">
                        <label for="searchFilter" class="form-label text-white">{{ __('catalogo.busqueda') }}</label>
                        <input type="text" class="form-control" id="searchFilter"
                            placeholder={{ __('catalogo.placeholder') }}>
                    </div>

                    <div class="mb-3">
                        <h3 class="text-white">{{ __('catalogo.categorias') }}</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="category1">
                            <label class="form-check-label" for="category1">
                                Categoría 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="category2">
                            <label class="form-check-label" for="category2">
                                Categoría 2
                            </label>
                        </div>
                    </div>
                </aside>
            </div>

            <div class="col-12 col-md-8 col-lg-9">
                <h2 class="text-white">{{ __('catalogo.productos') }}</h2>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-5 col-lg-3 mb-3">
                        <div class="card">
                            <img src="{{ asset('/images/Rubia.png') }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Producto 1</h5>
                                <p class="card-text">Descripción breve del producto.</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="filtersModal" tabindex="-1" aria-labelledby="filtersModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="filtersModalLabel">{{ __('catalogo.filtrosBtn') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <h3>Categorías</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="category1">
                            <label class="form-check-label" for="category1">
                                Categoría 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="category2">
                            <label class="form-check-label" for="category2">
                                Categoría 2
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
