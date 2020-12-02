@extends('layouts.loginbase')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <img src="{{ asset('images/ContactMi.svg') }}" alt="Logo">

    <div class="form-group">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nome" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar senha" required autocomplete="new-password">
    </div>

    <div class="form-group mb-0">
        <a class="btn btn-link" href="{{ route('login') }}">
            Já possuo conta!
        </a>

        <button type="submit" class="btn btn-primary float-right">
            Cadastrar
        </button>
    </div>
</form>
@endsection
