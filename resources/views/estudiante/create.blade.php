@extends('adminlte::page')

@section('title', 'Crear a un estudiante')

@section('content_header')
   <h1>Crear estudiante</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Crear Estudiante</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('estudiantes.store') }}" method="POST">
                @csrf

                <!-- Agrega aquí los campos del formulario -->
                <div class="form-group">
                    <label for="codigo">Código</label>
                    <input type="text" name="codigo" class="form-control" id="codigo" required>
                </div>

                <div class="form-group">
                    <label for="fecha_matricula">Fecha de Matrícula</label>
                    <input type="date" name="fecha_matricula" class="form-control" id="fecha_matricula" required>
                </div>

                <div class="form-group">
                    <label for="primer_nombre">Primer Nombre</label>
                    <input type="text" name="primer_nombre" class="form-control" id="primer_nombre" required>
                </div>

                <div class="form-group">
                    <label for="segundo_nombre">Segundo Nombre</label>
                    <input type="text" name="segundo_nombre" class="form-control" id="segundo_nombre">
                </div>

                <div class="form-group">
                    <label for="apellido1">Primer Apellido</label>
                    <input type="text" name="apellido1" class="form-control" id="apellido1" required>
                </div>

                <div class="form-group">
                    <label for="apellido2">Segundo Apellido</label>
                    <input type="text" name="apellido2" class="form-control" id="apellido2">
                </div>

                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento" required>
                </div>

                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" name="edad" class="form-control" id="edad" required>
                </div>

                <div class="form-group">
                    <label for="num_identificacion">Número de Identificación</label>
                    <input type="text" name="num_identificacion" class="form-control" id="num_identificacion" required>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" required>
                </div>

                <div class="form-group">
                    <label for="barrio">Barrio</label>
                    <input type="text" name="barrio" class="form-control" id="barrio" required>
                </div>

                <div class="form-group">
                    <label for="municipio">Municipio</label>
                    <input type="text" name="municipio" class="form-control" id="municipio" required>
                </div>

                <div class="form-group">
                    <label for="departamento">Departamento</label>
                    <input type="text" name="departamento" class="form-control" id="departamento" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>

                <div class="form-group">
                    <label for="ocupacion_actual">Ocupación Actual</label>
                    <input type="text" name="ocupacion_actual" class="form-control" id="ocupacion_actual" required>
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" id="telefono" required>
                </div>

                <div class="form-group">
                    <label for="estrato">Estrato</label>
                    <input type="number" name="estrato" class="form-control" id="estrato" required>
                </div>

                <div class="form-group">
                    <label for="sisben">Sisben</label>
                    <input type="number" name="sisben" class="form-control" id="sisben" required>
                </div>

                <div class="form-group">
                    <label for="desplazado">Desplazado</label>
                    <input type="text" name="desplazado" class="form-control" id="desplazado" required>
                </div>

                <div class="form-group">
                    <label for="institucion_procedencia">Institución de Procedencia</label>
                    <input type="text" name="institucion_procedencia" class="form-control" id="institucion_procedencia" required>
                </div>

                <div class="form-group">
                    <label for="estado_civil">Estado Civil</label>
                    <input type="text" name="estado_civil" class="form-control" id="estado_civil" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_nombre1">Nombre del Acudiente</label>
                    <input type="text" name="acudiente_nombre1" class="form-control" id="acudiente_nombre1" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_nombre2">Segundo Nombre del Acudiente</label>
                    <input type="text" name="acudiente_nombre2" class="form-control" id="acudiente_nombre2">
                </div>

                <div class="form-group">
                    <label for="acudiente_apellido1">Primer Apellido del Acudiente</label>
                    <input type="text" name="acudiente_apellido1" class="form-control" id="acudiente_apellido1" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_apellido2">Segundo Apellido del Acudiente</label>
                    <input type="text" name="acudiente_apellido2" class="form-control" id="acudiente_apellido2">
                </div>

                <div class="form-group">
                    <label for="acudiente_escolaridad">Escolaridad del Acudiente</label>
                    <input type="text" name="acudiente_escolaridad" class="form-control" id="acudiente_escolaridad" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_edad">Edad del Acudiente</label>
                    <input type="number" name="acudiente_edad" class="form-control" id="acudiente_edad" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_sexo">Sexo del Acudiente</label>
                    <input type="text" name="acudiente_sexo" class="form-control" id="acudiente_sexo" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_num_identificacion">Número de Identificación del Acudiente</label>
                    <input type="text" name="acudiente_num_identificacion" class="form-control" id="acudiente_num_identificacion" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_direccion_residencial">Dirección Residencial del Acudiente</label>
                    <input type="text" name="acudiente_direccion_residencial" class="form-control" id="acudiente_direccion_residencial" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_barrio">Barrio del Acudiente</label>
                    <input type="text" name="acudiente_barrio" class="form-control" id="acudiente_barrio" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_municipio">Municipio del Acudiente</label>
                    <input type="text" name="acudiente_municipio" class="form-control" id="acudiente_municipio" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_departamento">Departamento del Acudiente</label>
                    <input type="text" name="acudiente_departamento" class="form-control" id="acudiente_departamento" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_ocupacion_actual">Ocupación Actual del Acudiente</label>
                    <input type="text" name="acudiente_ocupacion_actual" class="form-control" id="acudiente_ocupacion_actual" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_telefono">Teléfono del Acudiente</label>
                    <input type="text" name="acudiente_telefono" class="form-control" id="acudiente_telefono" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_estrato">Estrato del Acudiente</label>
                    <input type="number" name="acudiente_estrato" class="form-control" id="acudiente_estrato" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_sisben">Sisben del Acudiente</label>
                    <input type="number" name="acudiente_sisben" class="form-control" id="acudiente_sisben" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_desplazado">Desplazado del Acudiente</label>
                    <input type="text" name="acudiente_desplazado" class="form-control" id="acudiente_desplazado" required>
                </div>

                <div class="form-group">
                    <label for="servicio_solicitado">Servicio Solicitado</label>
                    <input type="text" name="servicio_solicitado" class="form-control" id="servicio_solicitado" required>
                </div>

                <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                    <textarea name="observaciones" class="form-control" id="observaciones"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
@endsection
