@extends('layouts.app')

@section('content')
    <div class="row d-flex justify-content-center align-items-center trabajaConNosotrosClass">
        <div class="col col-md-3 my-2">
            <img class="img-fluid" src="{{ asset('/images/WorkWith.png') }}">
        </div>
        <div class="col-12 col-md-6 mb-5">
            <div class="card">
                <div class="card-header cardClassHeader">
                    {{ __('trabajaConNosotros.trabajaL') }}
                </div>
                <div class="card-body cardClass">
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label"> {{ __('trabajaConNosotros.formNombre') }}</label>
                            <input type="text" class="form-control" id="nombre" aria-describedby="nombre" required>

                        </div>
                        <div class="mb-3">
                            <label for="apellidos" class="form-label"> {{ __('trabajaConNosotros.formApellidos') }}</label>
                            <input type="text" class="form-control" id="apellidos" aria-describedby="apellidos" required>

                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label"> {{ __('trabajaConNosotros.formCorreo') }}</label>
                            <input type="text" class="form-control" id="correo" aria-describedby="correo" required>
                        </div>
                        <div class="mb-3">
                            <label for="fileUpload" class="form-label">{{ __('trabajaConNosotros.formCurriculum') }}</label>
                            <input type="file" class="form-control d-none" id="fileUpload" accept=".pdf,.doc,.docx"
                                required>
                            <label class="btn tertiary-killer mx-3"
                                for="fileUpload">{{ __('trabajaConNosotros.upload') }}</label>
                            <span id="fileName"></span>
                        </div>

                        <button type="submit"
                            class="btn tertiary-killer">{{ __('trabajaConNosotros.formEnviar') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
