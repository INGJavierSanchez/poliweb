<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
     public function __construct(){
         $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante.index')->with('estudiantes',$estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        // Validar los datos recibidos
        $request->validate([
            'codigo' => 'required',
            'fecha_matricula' => 'required|date',
            'primer_nombre' => 'required',
            'segundo_nombre' => 'nullable',
            'apellido1' => 'required',
            'apellido2' => 'nullable',
            'fecha_nacimiento' => 'required|date',
            'edad' => 'required|integer',
            'num_identificacion' => 'required',
            'direccion' => 'required',
            'barrio' => 'required',
            'municipio' => 'required',
            'departamento' => 'required',
            'email' => 'nullable|email',
            'ocupacion_actual' => 'nullable',
            'telefono' => 'nullable',
            'estrato' => 'required|integer',
            'sisben' => 'required|integer',
            'desplazado' => 'nullable',
            'institucion_procedencia' => 'nullable',
            'estado_civil' => 'nullable',
            'acudiente_nombre1' => 'required',
            'acudiente_nombre2' => 'nullable',
            'acudiente_apellido1' => 'required',
            'acudiente_apellido2' => 'nullable',
            'acudiente_escolaridad' => 'nullable',
            'acudiente_edad' => 'required|integer',
            'acudiente_sexo' => 'nullable',
            'acudiente_num_identificacion' => 'nullable',
            'acudiente_direccion_residencial' => 'nullable',
            'acudiente_barrio' => 'nullable',
            'acudiente_municipio' => 'nullable',
            'acudiente_departamento' => 'nullable',
            'acudiente_ocupacion_actual' => 'nullable',
            'acudiente_telefono' => 'nullable',
            'acudiente_estrato' => 'nullable|integer',
            'acudiente_sisben' => 'nullable|integer',
            'acudiente_desplazado' => 'nullable',
            'servicio_solicitado' => 'nullable',
            'observaciones' => 'nullable',
        ]);
        // Validar los datos recibidos
        $estudiantes = new Estudiante();
        // Capturar todos los datos recibidos
        $estudiantes->nombre1 = $request->nombre1;
        $estudiantes->nombre2 = $request->nombre2;
        $estudiantes->apellido1 = $request->apellido1;
        $estudiantes->apellido2 = $request->apellido2;
        $estudiantes->fecha_nacimiento = $request->fecha_nacimiento;
        $estudiantes->edad = $request->edad;
        $estudiantes->num_identificacion = $request->num_identificacion;
        $estudiantes->direccion = $request->direccion;
        $estudiantes->barrio = $request->barrio;
        $estudiantes->municipio = $request->municipio;
        $estudiantes->departamento = $request->departamento;
        $estudiantes->email = $request->email;
        $estudiantes->ocupacion_actual = $request->ocupacion_actual;
        $estudiantes->telefono = $request->telefono;
        $estudiantes->estrato = $request->estrato;
        $estudiantes->sisben = $request->sisben;
        $estudiantes->desplazado = $request->desplazado;
        $estudiantes->institucion_procedencia = $request->institucion_procedencia;
        $estudiantes->estado_civil = $request->estado_civil;
        $estudiantes->acudiente_nombre1 = $request->acudiente_nombre1;
        $estudiantes->acudiente_nombre2 = $request->acudiente_nombre2;
        $estudiantes->acudiente_apellido1 = $request->acudiente_apellido1;
        $estudiantes->acudiente_apellido2 = $request->acudiente_apellido2;
        $estudiantes->acudiente_escolaridad = $request->acudiente_escolaridad;
        $estudiantes->acudiente_edad = $request->acudiente_edad;
        $estudiantes->acudiente_sexo = $request->acudiente_sexo;
        $estudiantes->acudiente_num_identificacion = $request->acudiente_num_identificacion;
        $estudiantes->acudiente_direccion_residencial = $request->acudiente_direccion_residencial;
        $estudiantes->acudiente_barrio = $request->acudiente_barrio;
        $estudiantes->acudiente_municipio = $request->acudiente_municipio;
        $estudiantes->acudiente_departamento = $request->acudiente_departamento;
        $estudiantes->acudiente_ocupacion_actual = $request->acudiente_ocupacion_actual;
        $estudiantes->acudiente_telefono = $request->acudiente_telefono;
        $estudiantes->acudiente_estrato = $request->acudiente_estrato;
        $estudiantes->acudiente_sisben = $request->acudiente_sisben;
        $estudiantes->acudiente_desplazado = $request->acudiente_desplazado;
        $estudiantes->servicio_solicitado = $request->servicio_solicitado;
        $estudiantes->observaciones = $request->observaciones;;
        // Guardar los datos
        $estudiantes->save();

        return redirect('/estudiantes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiante.edit')->with('estudiante',$estudiante);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);

        $estudiante->codigo = $request->get('codigo');
        $estudiante->descripcion = $request->get('descripcion');
        $estudiante->cantidad = $request->get('cantidad');
        $estudiante->precio = $request->get('precio');

        $estudiante->save();

        return redirect('/estudiantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return redirect('/estudiantes');
    }
}
