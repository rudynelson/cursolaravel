<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personas;
use App\Profesion;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        


        $perse =  Personas::join("profesion","personas.profesion_id","=","profesion.id")
            ->select('personas.*','profesion.nombre_profesion')
            ->get();

        return view('personas.listar',compact('perse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $prof01 = Profesion::all();
        
        return view('personas.crear',compact('prof01'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedata = $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
            'fecha_nacimiento' => 'required',
            'edad' => 'required'
        ]);

        $vecPer = new Personas;
        $vecPer->profesion_id = $request->profesion_id;
        $vecPer->nombre = $request->nombre;
        $vecPer->primer_apellido = $request->primer_apellido;
        $vecPer->segundo_apellido = $request->segundo_apellido;
        $vecPer->fecha_nacimiento = $request->fecha_nacimiento;
        $vecPer->edad = $request->edad;
        $vecPer->estado = "ACTIVO";
        $vecPer->save();
        return redirect('/personas');
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
    public function edit($codpersona)
    {
        $personaselec = Personas::find($codpersona);
        $suprofesion = Profesion::all();   
        $id_persona = $codpersona;
        //return view('personas.editar',['id_perito'=>$codpersona,'perselec'=>$personaselec]);//
        return view('personas.editar',compact('id_persona','suprofesion','personaselec'));
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
        $perpapailo = Personas::find($id);
        $perpapailo->profesion_id = $request->profesion_id;
        $perpapailo->nombre = $request->nombre;
        $perpapailo->primer_apellido = $request->primer_apellido;
        $perpapailo->segundo_apellido = $request->segundo_apellido;
        $perpapailo->fecha_nacimiento = $request->fecha_nacimiento;
        $perpapailo->edad = $request->edad;
        $perpapailo->save();
        return redirect('/personas');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idpersona)
    {
        $personaBorrada = Personas::find($idpersona);
        $personaBorrada->delete();
        return redirect('/personas');
    }
}
