@extends('layouts.app')

<?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
?>

@section('content')
<div id="home" class="d-none d-md-block text-center">
    <div>
        <h2>Seja bem vindo, {{ Auth::user()->name }}!</h2>
        <span>{{ ucfirst(strftime('%A, dia %d de %B de %Y', strtotime('today'))) }}</span>
    </div>
</div>
@include('app.contacts-list', ['class' => 'd-md-none mobile'])
@endsection
