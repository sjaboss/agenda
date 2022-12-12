@extends('layouts/agenda')
@section('tituloPagina', 'Eliminar-Categoria')
@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h5 class="card-header">Formulario Eliminar de Contacto</h5>
                <div class="card-body">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="alert alert-danger" role="alert">
                            Esta seguro que quiere eliminar un registro?
                            <div class="table table-responsive">
                                <table class="table table-sm table-bordered" style="background-color: white">
                                    <thead>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th>Categoria</th>                         
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>{{ $contacto->nombres }}</td>
                                                <td>{{ $contacto->apellidos }}</td>
                                                <td>{{ $contacto->telefono }}</td>
                                                <td>{{ $contacto->correo }}</td>
                                                <td>{{ $contacto->categoria }}</td>
                                            </tr>         
                                    </tbody>
                                </table>
                         
            
                            </div>
                        </div>
                        <form  action="{{route('contactos.destroy',$contacto->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <p style="text-align:end">
                            <button class="btn btn-danger"> <span class="fas fa-user-times"> </span> Eliminar</button>
                            <a href="{{route("contactos.index")}}"> <span class="fas fa-undo-alt"> </span> Regresar</a>
                            </p>
                        </form>  
                        </p> 
                    </div>
        </div>
    @endsection 
