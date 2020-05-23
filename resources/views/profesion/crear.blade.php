@extends('layouts.admin')
@section('contenedor')

<div class="row">
	<div class="col-lg-4">
		
	</div>

	<div class="col-lg-4">
		<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Crear Nueva Profesion</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('profesion.store')}}" method="POST">
              	@csrf
                <div class="card-body">                  
                  <div class="form-group">
                    <label for="nombre_profesion">Nombre de la Profesion</label>
                    <input type="text" class="form-control" name="nombre_profesion" id="nombre_profesion" >
                    @error('nombre_profesion')
                    <p>{{$message}}
                    @enderror
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
	</div>
	<div class="col-lg-4">
		
	</div>

	
</div>

@endsection