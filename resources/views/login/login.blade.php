@extends('layouts/blanca')
<link href="{{ asset('css/stylebarra.css') }}"rel="stylesheet">
@section('tituloPagina', 'Login')
<div class="tope" style="padding-top: 10%"> </div>
@section('contenido')

    <h5 class="card-header" style="text-align: center"> <img class="logoFormularios" src="{{ asset('img/logosjaboss.png') }}"><br>Ingreso de Sistema</h5>
    <form class="form-group" action="{{ route('login') }}" method="POST" novalidate>
      
        @csrf
        @if (session('mensaje'))
            <div class="alert alert-danger mt-1" role="alert"><strong>Aviso:</strong>{{ session('mensaje') }}</div>
        @endif


        <label for="email" class="form-label">Correo</label>
        <input autocomplete="off" placeholder="Tu correo" type="email" name="email" id="email"
            class="form-control @error('email') form-control is-invalid @enderror" value="{{ old('email') }}">
        @error('email')
            <div class="alert alert-danger mt-1" role="alert"><strong>Aviso:</strong> {{ $message }} </div>
        @enderror


        <label for="password" class="form-label">Password</label>
        <input autocomplete="off" placeholder="Password de Registro" type="password" name="password"
            id="password"class="form-control @error('password') form-control is-invalid @enderror">
        @error('password')
            <div class="alert alert-danger mt-1" role="alert"><strong>Aviso:</strong> {{ $message }} </div>
        @enderror
        <hr>
        <p style="text-align:end">
            <button class="btn btn-primary"> <span class="fas fa-user-plus"> </span> Iniciar sesion</button>
            <a href="{{ route('inicio') }}"> <span class="fas fa-undo-alt"> </span></a>
        </p>
    </form>
    </p>
    </div>

@endsection
