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
                    <input type="text" name="codigo" class="form-control" id="codigo" readonly>
                </div>
                <div class="form-group">
                    <label for="servicio_solicitado">Servicio Solicitado</label>
                    <select id="servicio_solicitado" name="servicio_solicitado" class="form-control">
                        <option value="">Seleccione Servicio</option>
                        
                        <option value="parvulo">parvulo</option>
                        <option value="prejardin">prejardin</option>
                        <option value="jardin">jardin</option>
                        <option value="transicion">transicion</option>

                        <option value="">======</option>

                        <option value="primero">primero</option>
                        <option value="segundo">segundo</option>
                        <option value="tercero">tercero</option>
                        <option value="cuarto">cuarto</option>
                        <option value="quinto">quinto</option>
                      
                        <option value="">======</option>

                        <option value="bachilerato-normal6">sexto</option>
                        <option value="bachilerato-normal7">septimo</option>
                        <option value="bachilerato-normal8">octavo</option>
                        <option value="bachilerato-normal9">noveno</option>
                        <option value="bachilerato-normal10">decimo</option>
                        <option value="bachilerato-normal11">undecimo</option>

                        <option value="">======</option>

                        <option value="bachilerato-ciclo6">ciclo-sexto</option>
                        <option value="bachilerato-ciclo7">ciclo-septimo</option>
                        <option value="bachilerato-ciclo8">ciclo-octavo</option>
                        <option value="bachilerato-ciclo9">ciclo-noveno</option>
                        <option value="bachilerato-ciclo10">ciclo-decimo</option>
                        <option value="bachilerato-ciclo11">ciclo-undecimo</option>

                        <option value="">======</option>

                        <option value="curso_especializado">Curso Especializado</option>
                        <option value="carrera_tecnica">Carrera Técnica</option>
                        <option value="diplomado">Diplomado</option>
                    
                        
                    </select>
                    
                </div>
                <div class="form-group">
                    <label for="fecha_matricula">Fecha de Matrícula</label>
                    <input type="date" name="fecha_matricula" class="form-control" id="fecha_matricula"  min="1900-01-01" value="1980-01-01" required/>
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
                    <label for="estudiante_sexo">Sexo del Estudiante</label>
                    <select id="estudiante_sexo"  name="estudiante_sexo" class="form-control">
                        <option value="">Seleccione un Sexo</option>
                        <option value="hombre">HOMBRE</option>
                        <option value="mujer">MUJER</option>
                    
                        
                    </select>
                   
                </div>

                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento" min="1900-01-01" value="1980-01-01" required/>
                </div>

                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" name="edad" class="form-control" id="edad" readonly required>
                </div>

                <div class="form-group">
                    <label for="tipo_documento_estudiante">Tipo Documento</label>
                    <select id="tipo_documento_estudiante"  name="tipo_documento_estudiante" class="form-control">
                        <option value="">Seleccione un TIPO DE DOCUMENTO</option>
                        <option value="REGISTRO CIVIL">REGISTRO CIVIL</option>
                        <option value="TARJETA DE IDENTIDAD">TARJETA DE IDENTIDAD</option>
                        <option value="CEDULA">CEDULA</option>
                        <option value="CEDULA EXTRANJERIA">CEDULA EXTRANJERIA</option>
                        <option value="PASAPORTE">PASAPORTE</option>
                    
                        
                    </select>
                   
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
                            <select id="departamento" name="departamento" class="form-control">
                                <option value="">Seleccione un departamento</option>
                                @foreach(json_decode($datosDepartamento) as $item)
                                    <option value="{{ $item->id }}">{{ $item->departamento }}</option>
                                @endforeach
                            </select>
                
                            <label for="ciudad">Ciudad:</label>
                            <select id="ciudad" name="ciudad" class="form-control" readonly>
                                <option value="">Seleccione una ciudad</option>
                            </select>
               </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required onblur="validateEmail(this)" autocomplete="email"> 
                </div>

                <div class="form-group">
                    <div class="form-group">
                        <label for="ocupacion_actual">Ocupacion Actual:</label>
                        <select id="ocupacion_actual" name="ocupacion_actual" class="form-control">
                            <option value="">Seleccione un categoría</option>
                            @foreach(json_decode($ocupacionesColombia) as $ocupacion)
                            <option value="{{ $ocupacion->id }}">{{ $ocupacion->ocupacion }}</option>
                            @endforeach
                        </select>
                </div>
            

                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" name="telefono" class="form-control" id="telefono" required oninput="formatPhoneNumber(this)">
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
                    <select id="desplazado" name="desplazado" class="form-control">
                        <option value="">Seleccione un SI o NO</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>                      
                    </select>
                </div>

                <div class="form-group">
                    <label for="institucion_procedencia">Institución de Procedencia</label>
                    <input type="text" name="institucion_procedencia" class="form-control" id="institucion_procedencia" required>
                </div>

                <div class="form-group">
                    <label for="estado_civil">Estado Civil:</label>
                    <select id="estado_civil" name="estado_civil"  class="form-control">
                        <option value="">Seleccione un Estado Civil</option>
                        <option value="soltero">SOLTERO</option>
                        <option value="casado">CASADO</option>                       
                        <option value="viudo">VIUDO</option>
                        <option value="separado">SEPARADO</option>
                        <option value="divorciado">DIVORCIADO</option>
                        
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
                    <label for="acudiente_escolaridad">Escolaridad del Acudiente:</label>
                    <select id="acudiente_escolaridad" name="acudiente_escolaridad" class="form-control">
                        <option value="">Seleccione Escolaridad: </option>
                        @foreach(json_decode($niveles_escolaridad) as $escolaridad)
                        <option value="{{ $escolaridad->id }}">{{ $escolaridad->nivel }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <label for="acudiente_edad">Edad del Acudiente</label>
                    <input type="number" name="acudiente_edad" class="form-control" id="acudiente_edad" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_sexo">Sexo del Acudiente</label>
                    <select id="acudiente_sexo" id="acudiente_sexo" class="form-control">
                        <option value="">Seleccione un Sexo</option>
                        <option value="hombre">HOMBRE</option>
                        <option value="mujer">MUJER</option>                      
                    </select>
                   
                </div>
                <div class="form-group">
                    <label for="tipo_documento_acudiente">Tipo Documento</label>
                    <select id="tipo_documento_acudiente"  name="tipo_documento_acudiente" class="form-control">
                        <option value="">Seleccione un TIPO DE DOCUMENTO</option>
                        <option value="REGISTRO CIVIL">REGISTRO CIVIL</option>
                        <option value="TARJETA DE IDENTIDAD">TARJETA DE IDENTIDAD</option>
                        <option value="CEDULA">CEDULA</option>
                        <option value="CEDULA EXTRANJERIA">CEDULA EXTRANJERIA</option>
                        <option value="PASAPORTE">PASAPORTE</option>
                    
                        
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
                    <label for="acudiente_departamento">Departamento del Acudiente</label>
                    <select id="acudiente_departamento" name="acudiente_departamento" class="form-control">
                        <option value="">Seleccione un departamento</option>
                        @foreach(json_decode($datosDepartamento) as $item)
                            <option value="{{ $item->id }}">{{ $item->departamento }}</option>
                        @endforeach
                    </select>
                   
                </div>

                <div class="form-group">
                    <label for="acudiente_municipio">Municipio del Acudiente</label>
                    <select id="acudiente_municipio" id="acudiente_municipio" class="form-control" readonly>
                        <option value="">Seleccione una ciudad</option>
                    </select>
                    
                </div>

                <div class="form-group">
                    <label for="acudiente_ocupacion_actual">Ocupación Actual del Acudiente</label>
                    <select id="acudiente_ocupacion_actual" name="acudiente_ocupacion_actual" class="form-control">
                        <option value="">Seleccione un categoría</option>
                        @foreach(json_decode($ocupacionesColombia) as $ocupacion)
                        <option value="{{ $ocupacion->id }}">{{ $ocupacion->ocupacion }}</option>
                        @endforeach
                    </select>
                    
                </div>

                <div class="form-group">
                    <label for="acudiente_telefono">Teléfono del Acudiente</label>
                    <input type="tel" name="acudiente_telefono" class="form-control" id="acudiente_telefono" required oninput="formatPhoneNumber(this)">
                </div>

                <div class="form-group">
                    <label for="acudiente_estrato">Estrato del Acudiente</label>
                    <input type="number" name="acudiente_estrato" class="form-control" id="acudiente_estrato" required>
                </div>

                <div class="form-group">
                    <label for="acudiente_sisben">Sisben del Acudiente:</label>
                    <select id="acudiente_sisben" name="acudiente_sisben" class="form-control">
                        <option value="">Seleccione un categoría</option>
                        @foreach(json_decode($categoriasSisben) as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                   
                </div>

                <div class="form-group">
                    <label for="acudiente_desplazado">¿El Acudiente es Desplazado?</label>
                    <select id="acudiente_desplazado" name="acudiente_desplazado" class="form-control">
                        <option value="no">NO</option>   
                        <option value="si">SI</option>
                                          
                    </select>
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
                            $('#ciudad').prop('readonly', false);
    
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
                    $('#ciudad').prop('readonly', true);
                }
            });
        });
    </script>

<script>
    $(document).ready(function () {
        // Manejar el evento de cambio en el select de departamentos
        $('#acudiente_departamento').change(function () {
            var departamentoId = $(this).val();

            // Limpiar el select de ciudades
            $('#acudiente_municipio').empty();

            if (departamentoId !== '') {
                // Realizar la solicitud AJAX para obtener las ciudades del departamento seleccionado
                $.ajax({
                    url: '/ciudades/' + departamentoId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        // Habilitar el select de ciudades
                        $('#acudiente_municipio').prop('readonly', false);

                        // Agregar las opciones de ciudades al select
                        $.each(data, function (index, ciudad) {
                            $('#acudiente_municipio').append('<option value="' + ciudad + '">' + ciudad + '</option>');
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            } else {
                // Si no se selecciona ningún departamento, deshabilitar y limpiar el select de ciudades
                $('#acudiente_municipio').prop('readonly', true);
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
                title: '¡edad!',
                text: 'La persona es mayor de edad.',
                icon: 'success'
            });
        } else {
            Swal.fire({
                title: '¡edad!',
                text: 'Es menor de edad. Por favor, ten en cuenta las restricciones para menores.',
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


<script>
    function formatPhoneNumber(input) {
        const value = input.value.replace(/\D/g, ''); // Elimina los caracteres no numéricos
        if (value.length <= 3) {
            input.value = value;
        } else if (value.length <= 6) {
            input.value = `${value.slice(0, 3)}-${value.slice(3)}`;
        } else {
            input.value = `${value.slice(0, 3)}-${value.slice(3, 6)}-${value.slice(6, 10)}`;
        }
    }
</script>

<script>
    function validateEmail(input) {
        const emailValue = input.value;
        if (!emailValue.includes('@')) {
            // Muestra un modal con SweetAlert2
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Por favor, ingrese una dirección de correo electrónico válida.'
            }).then(() => {
                input.focus(); // Devuelve el foco al campo de correo electrónico
            });
        }
    }
</script>

@endsection
