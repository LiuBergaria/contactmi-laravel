@extends('layouts.app')

@section('content')
<div id="home" class="d-none d-md-block">
    <p>Home</p>
</div>
@include('app.contacts-list', ['class' => 'd-md-none mobile'])
@endsection
