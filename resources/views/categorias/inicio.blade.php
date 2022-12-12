@extends('layouts/agenda')
@section('tituloPagina', 'Categorias')
@section('contenido')
    {{-- @php
    print_r($categoria);
@endphp --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <p style="text-align:center">
                        <a href="{{ route('categorias.create') }} " class="btn btn-primary"><span class="fas fa-user-plus">
                            </span> formulario altas</a>
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
                            <h2>Categorias</h2>
                            <p class="card-text">
                            <div class="table table-responsive">
                                <table class="table table-striped table-hover table-sm table-bordered" id="tcategorias">
                                    <thead>
                                        <th>Categoria</th>
                                        <th>Descripcion</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($categoria as $item)
                                            <tr>
                                                <td>{{ $item->nombre }}</td>
                                                <td>{{ $item->descripcion }}</td>
                                                <td>
                                                    <a href="{{ route('categorias.edit', $item->id) }}" 
                                                        class="btn btn-warning btn-sm">
                                                         <span class="fas fa-user-edit"> </span>
                                                        </a> 
                                                </td>
                                                <td>
                                                    <a  href="{{ route('categorias.show', $item->id) }}"
                                                         class="btn btn-danger btn-sm">
                                                           <span class="fas fa-user-times"> </span>
                                                        </a> 
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                            </p>
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
        $('#tcategorias').DataTable({
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