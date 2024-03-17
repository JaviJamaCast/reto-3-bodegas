@extends('layouts.app')

@section('content')
    <div class="row d-flex justify-content-center align-items-center trabajaConNosotrosClass">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header cardClassHeader">{{ __('verify.verifyLabel') }}</div>

                <div class="card-body cardClass">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('verify.freshEmail') }}
                        </div>
                    @endif

                    {{ __('verify.message1') }}
                    {{ __('verify.message2') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">{{ __('verify.messageLink') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
