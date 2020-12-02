@extends('layouts.loginbase')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <img src="{{ asset('images/ContactMi.svg') }}" alt="Logo">

    <div class="form-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group mb-0 d-flex justify-content-between">
        @if (Route::has('password.request'))
            <a class="btn btn-link text-center" href="{{ route('password.request') }}">
                Esqueci minha senha
            </a>
        @endif
        
        <button type="submit" class="btn btn-primary align-self-end">
            Entrar
        </button>
    </div>
</form>
@endsection
