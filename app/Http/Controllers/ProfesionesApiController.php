<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesion;

class ProfesionesApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return Profesion::all();
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
        $Prof = new Profesion;
        $Prof->nombre_profesion = $request->nombre_profesion;
        $Prof->estado = "ACTIVO";
        $Prof->save();
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
        return Profesion::where('id',$id)->get();
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
        $profepapailo = Profesion::find($id);
        $profepapailo->nombre_profesion = $request->nombre_profesion;
        $profepapailo->save();
        return "Se modifico registro de forma correcta";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesorborrado = Profesion::find($id);
        $profesorborrado->delete();
        return "Se eliminó Profesion de forma correcta";
    }
}
