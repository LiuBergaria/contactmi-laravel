@extends('layouts.loginbase')

@section('content')

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <img src="{{ asset('images/ContactMi.svg') }}" alt="Logo">

    <div class="form-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="form-group mb-0">
        <button type="submit" class="btn btn-primary float-right">
            Enviar código
        </button>
    </div>
</form>
@endsection
