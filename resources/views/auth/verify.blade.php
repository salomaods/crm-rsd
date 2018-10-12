@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu e-mail.') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um novo link de verificação de e-mail foi enviado.') }}
                        </div>
                    @endif

                    {{ __('Verifique seu e-mail para confirmar sua conta.') }}
                    {{ __('Se você não recebeu o e-mail') }}, <a href="{{ route('verification.resend') }}">{{ __('clique aqui para enviar novamente.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
