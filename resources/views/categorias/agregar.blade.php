@extends('layouts/agenda')
@section('tituloPagina', 'Alta-Categoria')
@section('contenido')

    <div class="card">
        <h5 class="card-header">Formulario: Alta de Categorias</h5>
        <div class="card-body">
            <p class="card-text">
            <form class="" action=" {{ route('categorias.store') }}" method="POST">
                @csrf
                @method('POST')
                <label>Nombre</label>
                <input autocomplete="off"type="text" name="nom" id="nom"class="form-control" required>
                <label>Descripción</label>
                <textarea autocomplete="off" name="desc" id="desc" cols="30" rows="5"class="form-control"></textarea>
                <hr>
                <p style="text-align:end">
                    <button class="btn btn-primary"> <span class="fas fa-user-plus"> </span> Agregar</button>
                    <a href="{{ route('categorias.index') }}"> <span class="fas fa-undo-alt"> </span> Regresar</a>
                </p>
            </form>
            </p>
        </div>

    </div>

@endsection
