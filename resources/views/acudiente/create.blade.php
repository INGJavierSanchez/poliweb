@extends('adminlte::page')


@section('title', 'Crear a un acudiente')

@section('content_header')
   <h1>Crear acudiente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Crear Acudiente</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('acudientes.store') }}" method="POST">
                @csrf

                <!-- Agrega aquí los campos del formulario -->
                <div class="form-group">
                    <label for="codigo">Código Del estudiante</label>
                    <input type="text" name="codigo" class="form-control" id="codigo" enable>
                </div>
           
                <div class="form-group">
                    <label for="num_identificacion">Número de Identificación del Acudiente</label>
                    <input type="text" name="num_identificacion" class="form-control" id="num_identificacion" required>
                </div>

                <div class="form-group">
                    <label for="val_num_identificacion">Validar Número de Identificación</label>
                    <input type="text" name="val_num_identificacion" class="form-control" id="val_num_identificacion" required>
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
                    <select id="acudiente_escolaridad" class="form-control">
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
                    <select id="acudiente_sexo" class="form-control">
                        <option value="">Seleccione un Sexo</option>
                        <option value="hombre">HOMBRE</option>
                        <option value="mujer">MUJER</option>                      
                    </select>
                   
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
                    <select id="acudiente_departamento" class="form-control">
                        <option value="">Seleccione un departamento</option>
                        @foreach(json_decode($datosDepartamento) as $item)
                            <option value="{{ $item->id }}">{{ $item->departamento }}</option>
                        @endforeach
                    </select>
                   
                </div>

                <div class="form-group">
                    <label for="acudiente_municipio">Municipio del Acudiente</label>
                    <select id="acudiente_municipio" class="form-control" disabled>
                        <option value="">Seleccione una ciudad</option>
                    </select>
                    
                </div>

                <div class="form-group">
                    <label for="acudiente_ocupacion_actual">Ocupación Actual del Acudiente</label>
                    <select id="acudiente_ocupacion_actual" class="form-control">
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
                    <select id="acudiente_sisben" class="form-control">
                        <option value="">Seleccione un categoría</option>
                        @foreach(json_decode($categoriasSisben) as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                   
                </div>

                <div class="form-group">
                    <label for="acudiente_desplazado">¿El Acudiente es Desplazado?</label>
                    <select id="acudiente_desplazado" class="form-control">
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
                        $('#acudiente_municipio').prop('disabled', false);

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
                $('#acudiente_municipio').prop('disabled', true);
            }
        });
    });
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


@endsection
