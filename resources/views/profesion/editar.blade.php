@extends('layouts.admin')
@section('contenedor')

<div class="row">
	<div class="col-lg-4">
		
	</div>

	<div class="col-lg-4">
		<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modificar Profesion</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('profesion.update',$id_prof)}}" method="POST">
              	@csrf
              	@Method('PUT')
                <div class="card-body">                  
                  <div class="form-group">
                    <label for="nombre_profesion">Descripcion de Profesion</label>
                    <input type="text" class="form-control" name="nombre_profesion" id="nombre_profesion" value="{{$papilo->nombre_profesion}}" >
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Grabar Modificaciones</button>
                </div>
              </form>
            </div>
	</div>
	<div class="col-lg-4">
		
	</div>

	
</div>

@endsection