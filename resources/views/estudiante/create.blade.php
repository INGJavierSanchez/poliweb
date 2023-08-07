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
                    <input type="number" name="edad" class="form-control" id="edad" disabled required>
                </div>

                <div class="form-group">
                    <label for="num_identificacion">Número de Identificación</label>
                    <input type="text" name="num_identificacion" class="form-control" id="num_identificacion" required>
                </div>
                <div class="form-group">
                    <label for="val_num_identificacion">Validar Número de Identificación</label>
                    <input type="text" name="val_num_identificacion" class="form-control" id="val_num_identificacion" required>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" required>
                </div>

                        <div class="form-group">
                            <label for="departamento">Departamento:</label>
                            <select id="departamento" class="form-control">
                                <option value="">Seleccione un departamento</option>
                                @foreach(json_decode($datosDepartamento) as $item)
                                    <option value="{{ $item->id }}">{{ $item->departamento }}</option>
                                @endforeach
                            </select>
                
                            <label for="ciudad">Ciudad:</label>
                            <select id="ciudad" class="form-control" disabled>
                                <option value="">Seleccione una ciudad</option>
                            </select>
               </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>

                <div class="form-group">
                    <div class="form-group">
                        <label for="ocupacion_actual">Ocupacion Actual:</label>
                        <select id="ocupacion_actual" class="form-control">
                            <option value="">Seleccione un categoría</option>
                            @foreach(json_decode($ocupacionesColombia) as $ocupacion)
                            <option value="{{ $ocupacion->id }}">{{ $ocupacion->ocupacion }}</option>
                            @endforeach
                        </select>
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
                    <div class="form-group">
                        <label for="siben">Sisben:</label>
                        <select id="siben" class="form-control">
                            <option value="">Seleccione un categoría</option>
                            @foreach(json_decode($categoriasSisben) as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                            @endforeach
                        </select>
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
                    <label for="estado_civil">Estado Civil:</label>
                    <select id="siben" class="form-control">
                        <option value="">Seleccione un Estado Civil</option>
                        <option value="casado">casado</option>
                        <option value="soltero">soltero</option>
                        <option value="viudo">viudo</option>
                        <option value="separado">separado</option>
                        <option value="divorciado">divorciado</option>
                        
                    </select>
                
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
                    <select id="siben" class="form-control">
                        <option value="">Seleccione un Sexo</option>
                        <option value="hombre">hombre</option>
                        <option value="mujer">mujer</option>
                    
                        
                    </select>
                   
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
                    <label for="acudiente_sisben">Sisben del Acudiente:</label>
                    <select id="acudiente_sisben" class="form-control">
                        <option value="">Seleccione un categoría</option>
                        @foreach(json_decode($categoriasSisben) as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                   
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Manejar el evento de cambio en el select de departamentos
            $('#departamento').change(function () {
                var departamentoId = $(this).val();
    
                // Limpiar el select de ciudades
                $('#ciudad').empty();
    
                if (departamentoId !== '') {
                    // Realizar la solicitud AJAX para obtener las ciudades del departamento seleccionado
                    $.ajax({
                        url: '/ciudades/' + departamentoId,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            // Habilitar el select de ciudades
                            $('#ciudad').prop('disabled', false);
    
                            // Agregar las opciones de ciudades al select
                            $.each(data, function (index, ciudad) {
                                $('#ciudad').append('<option value="' + ciudad + '">' + ciudad + '</option>');
                            });
                        },
                        error: function (xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                } else {
                    // Si no se selecciona ningún departamento, deshabilitar y limpiar el select de ciudades
                    $('#ciudad').prop('disabled', true);
                }
            });
        });
    </script>
    
    <script>
        // Evento que se dispara cuando cambia la fecha de nacimiento
        $(document).on('change', '#fecha_nacimiento', function() {
            // Obtener el valor de la fecha de nacimiento
            const fechaNacimiento = $(this).val();
    
            // Calcular la edad en años
            const edad = calcularEdad(fechaNacimiento);
    
            // Actualizar el campo de entrada de edad
            $('#edad').val(edad);
        });
    
        // Función para calcular la edad en años
        function calcularEdad(fechaNacimiento) {
            const fechaActual = new Date();
            const fechaNac = new Date(fechaNacimiento);
            let edad = fechaActual.getFullYear() - fechaNac.getFullYear();
    
            // Restar un año si la fecha actual es anterior al cumpleaños
            if (fechaActual.getMonth() < fechaNac.getMonth() ||
                (fechaActual.getMonth() === fechaNac.getMonth() && fechaActual.getDate() < fechaNac.getDate())) {
                edad--;
            }
    
            return edad;
        }
    </script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
<script>
    // Evento que se dispara cuando cambia la fecha de nacimiento
    $(document).on('change', '#fecha_nacimiento', function() {
        // Obtener el valor de la fecha de nacimiento
        const fechaNacimiento = $(this).val();

        // Calcular la edad en años
        const edad = calcularEdad(fechaNacimiento);

        // Actualizar el campo de entrada de edad
        $('#edad').val(edad);

        // Mostrar notificación según la edad
        if (edad >= 18) {
            Swal.fire({
                title: '¡Mayor de edad!',
                text: '¡Felicidades! Eres mayor de edad.',
                icon: 'success'
            });
        } else {
            Swal.fire({
                title: '¡Menor de edad!',
                text: 'Eres menor de edad. Por favor, ten en cuenta las restricciones para menores.',
                icon: 'warning'
            });
        }
    });

    // Función para calcular la edad en años
    function calcularEdad(fechaNacimiento) {
        const fechaActual = new Date();
        const fechaNac = new Date(fechaNacimiento);
        let edad = fechaActual.getFullYear() - fechaNac.getFullYear();

        // Restar un año si la fecha actual es anterior al cumpleaños
        if (fechaActual.getMonth() < fechaNac.getMonth() ||
            (fechaActual.getMonth() === fechaNac.getMonth() && fechaActual.getDate() < fechaNac.getDate())) {
            edad--;
        }

        return edad;
    }
</script>


<script>
    // Evento que se dispara cuando cambia el campo de val_num_identificacion
    $(document).on('keyup', '#val_num_identificacion', function() {
        // Obtener el valor de num_identificacion y val_num_identificacion
        const numIdentificacion = $('#num_identificacion').val();
        const valNumIdentificacion = $(this).val();

        // Verificar si los campos son iguales cuando tengan la misma cantidad de caracteres
        if (valNumIdentificacion.length === numIdentificacion.length && valNumIdentificacion !== numIdentificacion) {
            Swal.fire({
                title: '¡Error!',
                text: 'El número de identificación no coincide.',
                icon: 'error'
            });
        }
    });
</script>

<script>
    // Evento que se dispara cuando cambia el campo de val_num_identificacion
    $(document).on('keyup', '#val_num_identificacion', function() {
        // Obtener el valor de num_identificacion y val_num_identificacion
        const numIdentificacion = $('#num_identificacion').val();
        const valNumIdentificacion = $(this).val();

        // Verificar si los campos son iguales cuando tengan la misma cantidad de caracteres
        if (valNumIdentificacion.length === numIdentificacion.length && valNumIdentificacion === numIdentificacion) {
            Swal.fire({
                title: '¡Éxito!',
                text: 'El número de identificación coincide.',
                icon: 'success'
            });
        }
    });
</script>

@endsection
