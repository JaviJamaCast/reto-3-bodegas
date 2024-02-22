@extends('layouts.app')

@section('content')
    <div class="row d-flex justify-content-center align-items-center trabajaConNosotrosClass">
        <div class="col-md-3 my-2">
            <img class="img-fluid" src="{{ asset('/images/KawaiiLogo.png') }}">
        </div>
        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-header cardClassHeader">{{ __('register.registerL') }}</div>

                <div class="card-body cardClass">
                    <form method="POST" action="{{ route('register') }} " enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="nombre"
                                class="col-md-4 col-form-label text-md-end">{{ __('register.name') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text"
                                    class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                    value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="apellidos"
                                class="col-md-4 col-form-label text-md-end">{{ __('register.apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="apellidos"
                                    value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus>

                                @error('apellidos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nombre_usuario"
                                class="col-md-4 col-form-label text-md-end">{{ __('register.usuarioN') }}</label>

                            <div class="col-md-6">
                                <input id="nombre_usuario" type="text"
                                    class="form-control @error('nombre_usuario') is-invalid @enderror" name="nombre_usuario"
                                    value="{{ old('nombre_usuario') }}" required autocomplete="nombre_usuario" autofocus>

                                @error('nombre_usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="foto_perfil"
                                class="col-md-4 col-form-label text-md-end">{{ __('register.foto') }}</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control d-none" name="foto_perfil" id="foto_perfil"
                                    accept=".png,.jpg,.jpeg" required>
                                <label class="btn tertiary-killer mx-3"
                                    for="foto_perfil">{{ __('register.fotoCrear') }}</label>
                                <span id="fileName"></span>


                                @error('foto_perfil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('register.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('register.password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('register.confirmPassword') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn primary-killer">
                                    {{ __('register.registerB') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
