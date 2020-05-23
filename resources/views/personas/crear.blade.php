@extends('layouts.admin')
@section('contenedor')

<div class="row">
	<div class="col-lg-4">
		
	</div>

	<div class="col-lg-4">
		<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Crear Nueva Persona</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('personas.store')}}" method="POST">
              	@csrf
                <div class="card-body">
                  

                  <div class="form-group">
                    <label for="nombre">Nombre de la Persona</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" >
                    @error('nombre')
                    <p>{{$message}}
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="primer_apellido">Primer Apellido</label>
                    <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" >
                    @error('primer_apellido')
                    <p>{{$message}}
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="segundo_apellido">Segundo Apellido</label>
                    <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" >
                    @error('segundo_apellido')
                    <p>{{$message}}
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" >
                    @error('fecha_nacimiento ')
                    <p>{{$message}}
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="edad">Edad de la Persona</label>
                    <input type="text" class="form-control" name="edad" id="edad" >
                    @error('edad')
                    <p>{{$message}}
                    @enderror
                  </div>
                  <div class="form-group">
                        <label>Profesion de la Persona</label>
                        <select class="form-control" name="profesion_id">
                         @foreach($prof01 as $proform)  
                           <option value="{{$proform->id}}">{{$proform->nombre_profesion}}</option>
                         @endforeach 
                          
                        </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar Datos</button>
                </div>
              </form>
            </div>
	</div>
	<div class="col-lg-4">
		
	</div>

	
</div>
	

@endsection