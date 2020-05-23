<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesion;

class ProfesionController extends Controller
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
        
        $profesionvar =  Profesion::all();

        return view('profesion.listar',compact('profesionvar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesion.crear');
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
            'nombre_profesion' => 'required|unique:Profesion'
        ]);
        $Prof = new Profesion;
        $Prof->nombre_profesion = $request->nombre_profesion;
        $Prof->estado = "ACTIVO";
        $Prof->save();
        return redirect('/profesion');
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
    public function edit($identificador)
    {
        $profe = Profesion::find($identificador);
        return view('profesion.editar',['id_prof'=>$identificador,'papilo'=>$profe]);
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
        return redirect('/profesion');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($iddelprofe)
    {
        $profesorborrado = Profesion::find($iddelprofe);
        $profesorborrado->delete();
        return redirect('/profesion');
    }
}
