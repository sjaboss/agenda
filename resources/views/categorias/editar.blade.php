@extends('layouts/agenda')
@section('tituloPagina', 'Editar-Categoria')
@section('contenido')

    <div class="card">
        <h5 class="card-header">Formulario: Editar de Categorias</h5>
        <div class="card-body">
            <p class="card-text">
            <form  action="{{route('categorias.update', $categoria->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label>Nombre</label>
                <input autocomplete="off"name="nom" id="nom"class="form-control" value="{{$categoria->nombre}}" required >
                <label>Descripción</label>
                <textarea autocomplete="off"name="desc" id="desc" cols="30" rows="5"class="form-control"> {{$categoria->descripcion}}</textarea>
                <hr>
                <p style="text-align:end">
                    <button class="btn btn-warning"> <span class="fas fa-user-edit"> </span> Actualizar</button>
                    <a href="{{ route('categorias.index') }}"> <span class="fas fa-undo-alt"> </span> Regresar</a>
                </p>
            </form>
            </p>
        </div>

    </div>

@endsection
