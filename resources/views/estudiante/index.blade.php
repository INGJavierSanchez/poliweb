@extends('adminlte::page')

@section('title', 'Listar Estudiante')

@section('content_header')
    <h1>Listado de Estudiante</h1>
@stop

@section('content')
   <a href="estudiantes/create" class="btn btn-primary mb-3">Crear Estudiante</a>

<table id="estudiantes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">SEDE</th>
            <th scope="col">Número De Identificación</th>
            <th scope="col">Primer Nombre</th>
            <th scope="col">Segundo Nombre</th>
            <th scope="col">Primer Apellido</th>
            <th scope="col">Segundo Apellido</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Edad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($estudiantes as $estudiante)
        <tr>
            <td>{{$estudiante->id}}</td>
            <td>{{$estudiante->sede}}</td>
            <td>{{$estudiante->num_identificacion}}</td>
            <td>{{$estudiante->primer_nombre}}</td>
            <td>{{$estudiante->segundo_nombre}}</td>
            <td>{{$estudiante->primer_apellido}}</td>
            <td>{{$estudiante->segundo_apellido}}</td>
            <td>{{$estudiante->fecha_nacimiento}}</td>
            <td>{{$estudiante->edad}}</td>
            
            
            <td>
                <form action="{{ route ('estudiantes.destroy',$estudiante->id)}}" method="POST">
                <a href="/estudiantes/{{ $estudiante->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
  
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#estudiantes').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
            }
        });
    });
    </script>

@stop