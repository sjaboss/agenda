@extends('layouts/agenda')
@section('tituloPagina', 'Eliminar-Categoria')
@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h5 class="card-header">Formulario Eliminar de Categoria</h5>
                <div class="card-body">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="alert alert-danger" role="alert">
                            Esta seguro que quiere eliminar un registro?
                            <div class="table table-responsive">
                                <table class="table table-sm table-bordered" style="background-color: white">
                                    <thead>
                                        <th>Nombres</th>
                                        <th>descripcion</th>
                                        
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>{{$categoria->nombre}}</td>
                                                <td>{{$categoria->descripcion}}</td> 
                                            </tr>         
                                    </tbody>
                                </table>
                         
            
                            </div>
                        </div>
                        <form  action="{{route('categorias.destroy',$categoria->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <p style="text-align:end">
                            <button class="btn btn-danger"> <span class="fas fa-user-times"> </span> Eliminar</button>
                            <a href="{{route("categorias.index")}}"> <span class="fas fa-undo-alt"> </span> Regresar</a>
                            </p>
                        </form>  
                        </p> 
                    </div>
        </div>
    @endsection 
