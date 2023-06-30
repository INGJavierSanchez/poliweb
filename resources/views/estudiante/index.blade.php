@extends('adminlte::page')

@section('title', 'Listar Estudiante')

@section('content_header')
    <h1>Listado de Estudiante</h1>
@stop

@section('content')
   <a href="estudiantes/create" class="btn btn-primary mb-3">CREAR</a>

<table id="estudiantes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Fecha de Matrícula</th>
            <th scope="col">Primer Nombre</th>
            <th scope="col">Segundo Nombre</th>
            <th scope="col">Primer Apellido</th>
            <th scope="col">Primer Apellido</th>
            <th scope="col">Segundo Apellido</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Edad</th>
            <th scope="col">Número de Identificación</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($estudiantes as $estudiante)
        <tr>
            <td>{{$estudiante->id}}</td>
            <td>{{$estudiante->codigo}}</td>
            <td>{{$estudiante->fecha_matricula}}</td>
            <td>{{$estudiante->primer_nombre}}</td>
            <td>{{$estudiante->segundo_nombre}}</td>
            <td>{{$estudiante->apellido1}}</td>
            <td>{{$estudiante->apellido2}}</td>
            <td>{{$estudiante->fecha_nacimiento}}</td>
            <td>{{$estudiante->edad}}</td>
            <td>{{$estudiante->num_identificacion}}</td>
            
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
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#articulos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop