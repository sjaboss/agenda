@extends('layouts/agenda')
@section('tituloPagina', 'Contactos')
@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <p style="text-align:center">
                        <a href="{{route('contactos.create')}} " class="btn btn-primary"><span class="fas fa-user-plus"> </span> formulario altas</a>
                    </p>
                    <div class="row">
                        <div class="col col-sm-12">
                            @if ($mensaje = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ $mensaje }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Contactos</h2>
                            <p class="card-text">
                            <div class="table table-responsive">
                                <table class="table table-striped table-hover table-sm table-bordered" id="tcontactos">
                                    <thead>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th>Categoria</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </thead>
                                    <tbody>
                                             @foreach ($vista as $item) 
                                        <tr>
                                            <td>{{ $item->nombres }}</td>
                                            <td>{{ $item->apellidos }}</td>
                                            <td>{{ $item->telefono }}</td>
                                            <td>{{ $item->correo }}</td>
                                            <td>{{ $item->categoria }}</td>
                                            <td>
                                                <a href="{{ route('contactos.edit', $item->id) }}" 
                                                    class="btn btn-warning btn-sm">
                                                     <span class="fas fa-user-edit"> </span>
                                                    </a> 
                                            </td>
                                            <td>
                                                <a  href="{{ route('contactos.show', $item->id) }}"
                                                     class="btn btn-danger btn-sm">
                                                       <span class="fas fa-user-times"> </span>
                                                    </a> 
                                            </td>

                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('dataTable')
    <script type="text/javascript">
        //Asi lo van a tener estas 2 lineas de codigo añadan o reemplazen
        $(document).ready(function() {
            $('#tcontactos').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    /*   'copyHtml5', */
                     'excelHtml5',  
                    /*         'csvHtml5', */
                       'pdfHtml5' 
                ],
                "order": [
                    [0, "desc"]
                ],
                //para apagar el pie
                    "info": true,
                "paging": true,
                language: {
                    "sSearch": "Buscar:",
                    "info": "_TOTAL_ Total de Rubros",
                    "infoEmpty": "hojas 0 a 0 de 0 mesas",
                }
            });
    
        });
    </script>
    @endsection