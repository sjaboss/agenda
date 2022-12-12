@extends('layouts/agenda')
@section('tituloPagina', 'Editar-Contacto')
@section('contenido')

    <div class="card">
        <h5 class="card-header">Formulario: Editar de Contactos</h5>
        <div class="card-body">
            <p class="card-text">
            <form class="" action="  {{route('contactos.update',$contacto->id)}} " method="POST">
                @csrf
                @method('PUT')
                <label>Nombre</label>
                <input autocomplete="off"type="text" name="nom" id="nom"class="form-control" required value="{{$contacto->nombres}}">
                <label>Apellidos</label>
                <input autocomplete="off"type="text" name="ape" id="ape"class="form-control" required value="{{$contacto->apellidos}}">
                <label>Telefono</label>
                <input autocomplete="off"type="text" name="tel" id="tel"class="form-control" required value="{{$contacto->telefono}}">
                <label>Email</label>
                <input autocomplete="off"type="text" name="cor" id="cor"class="form-control" required value="{{$contacto->correo}}">
                <label for="categoria" >Categoria</label>
                <select name="cat" id="cat"class="form-select" required>
                    @foreach ($categoria  as $item)
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                @endforeach
                </select>
                <hr>
                <p style="text-align:end">
                    <button class="btn btn-warning"> <span class="fas fa-user-edit"> </span> Actualizar</button>
                    <a href="{{ route('contactos.index') }}"> <span class="fas fa-undo-alt"> </span> Regresar</a>
                </p>
            </form>
            </p>
        </div>

    </div>

@endsection
