<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personas;
use App\Profesion;

class PersonasApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return Personas::join("profesion","personas.profesion_id","=","profesion.id")
            ->select('personas.*','profesion.nombre_profesion')
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vecPer = new Personas;
        $vecPer->profesion_id = $request->profesion_id;
        $vecPer->nombre = $request->nombre;
        $vecPer->primer_apellido = $request->primer_apellido;
        $vecPer->segundo_apellido = $request->segundo_apellido;
        $vecPer->fecha_nacimiento = $request->fecha_nacimiento;
        $vecPer->edad = $request->edad;
        $vecPer->estado = "ACTIVO";
        $vecPer->save();
        return "Se registro de forma correcta";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Personas::where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        return "Se Modifico registro de forma correcta";
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
        return "Se elimino Persona de forma correcta";
    }
}
