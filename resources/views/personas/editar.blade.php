@extends('layouts.admin')
@section('contenedor')
<div class="row">
  <div class="col-lg-4">
    
  </div>

  <div class="col-lg-4">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modificar Datos de la Persona</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('personas.update',$id_persona)}}" method="POST">
                @csrf
                @Method('PUT')
                <div class="card-body">
                  
                  
                  <div class="form-group">
                    <label for="nombre">Nombre de la Persona</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$personaselec->nombre}}" >
                  </div>
                  <div class="form-group">
                    <label for="primer_apellido">Primer Apellido</label>
                    <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" value="{{$personaselec->primer_apellido}}" >
                  </div>
                  <div class="form-group">
                    <label for="segundo_apellido">Segundo Apellido</label>
                    <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" value="{{$personaselec->segundo_apellido}}" >
                  </div>
                  <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$personaselec->fecha_nacimiento}}" >
                  </div>
                  <div class="form-group">
                    <label for="edad">Edad de la Persona</label>
                    <input type="text" class="form-control" name="edad" id="edad" value="{{$personaselec->edad}}" >
                  </div>
                  
                  <div class="form-group">
                        <label>Profesion de la Persona</label>
                        <select class="form-control" name="profesion_id">
                           @foreach($suprofesion as $prof)  
                           <option value="{{$prof->id}}"  
                              @if($prof->id == $personaselec->profesion_id)
                                selected
                              @endif >
                            {{$prof->nombre_profesion}}</option>
                            @endforeach 
                   
                          
                        </select>
                      </div>


                  



                </div>


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Grabar Modificacion</button>
                </div>
              </form>
            </div>
  </div>
  <div class="col-lg-4">
    
  </div>
 
</div>
  



@endsection