@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-lg-5">
        <div class="col-md-8 py-5">
            <div class="card">
                <div class="card-header couleurfond1">{{ __('Verifier Votre adresse email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, verifier le message envoyé à votre adresse email.') }}
                    {{ __('Aucun message') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline couleurfond1">{{ __('Renvoyer un autre message') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
