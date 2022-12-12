@extends('layouts/agenda')
@section('tituloPagina', 'Alta-Contacto')
@section('contenido')

    <div class="card">
        <h5 class="card-header">Formulario: Alta de Contactos</h5>
        <div class="card-body">
            <p class="card-text">
            <form class="" action=" {{ route('contactos.store') }} " method="POST">
                @csrf
                <label>Nombre</label>
                <input autocomplete="off" type="text" name="nom" id="nom"class="form-control" required>
                <label>Apellidos</label>
                <input autocomplete="off"type="text" name="ape" id="ape"class="form-control" required>
                <label>Telefono</label>
                <input autocomplete="off"type="text" name="tel" id="tel"class="form-control" required>
                <label>Email</label>
                <input autocomplete="off" type="text" name="cor" id="cor"class="form-control" required>
                <label for="categoria" >Categoria</label>
                <select name="cat" id="cat"class="form-select" required>
                    <option value="">Selecciona una Categoria</option>
                    @foreach ($categoria  as $item)
                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endforeach
                </select>
                <hr>
                <p style="text-align:end">
                    <button class="btn btn-primary"> <span class="fas fa-user-plus"> </span> Agregar</button>
                    <a href="{{ route('contactos.index') }}"> <span class="fas fa-undo-alt"> </span> Regresar</a>
                </p>
            </form>
            </p>
        </div>

    </div>

@endsection
