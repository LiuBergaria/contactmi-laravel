@extends('layouts.loginbase')

@section('content')
<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <img src="{{ asset('images/ContactMi.svg') }}" alt="Logo">

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Nova senha" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme a nova senha" required autocomplete="new-password">
    </div>

    <div class="form-group mb-0">
        <button type="submit" class="btn btn-primary float-right">
            Confirmar
        </button>
    </div>
</form>
@endsection
