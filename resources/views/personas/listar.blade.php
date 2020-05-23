@extends('layouts.admin')
@section('contenedor')


<div align="center">
  <p>LISTAR PERSONAS</p>

</div>

  <a href="{{route('personas.create')}}">INGRESAR NUEVA PERSONA</a>  
  <br> </br>
  <br> </br>


<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    

                    <div class="input-group-append">
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 700px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
              <tr>
                <th>ID</th>
                <th>NOMBRE PERSONA</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>FECHA DE NAC.</th>
                <th>EDAD</th>
                <th>PROFESION</th>
                <th>ESTADO</th>
                <th>OPCIONES</th>
              </tr>
              </thead>
            <tbody>
          @foreach($perse as $personalistar)
          <tr>
            <td>{{$personalistar->id}}</td>
            <td>{{$personalistar->nombre}}</td>            
            <td>{{$personalistar->primer_apellido}}</td>            
            <td>{{$personalistar->segundo_apellido}}</td>            
            <td>{{$personalistar->fecha_nacimiento}}</td>            
            <td>{{$personalistar->edad}}</td>            
            <td>{{$personalistar->nombre_profesion}}</td>            
            <td>{{$personalistar->estado}}</td>            
            <td><a href="{{route('personas.edit',$personalistar->id)}}" class="btn btn-block    bg-gradient-primary">Editar</a>
              

              <form action="{{route('personas.destroy',$personalistar->id)}}" method="POST">
                @csrf
                @Method('DELETE')
                <input type="submit" name="eliminar" value="Eliminar" class="btn btn-block bg-gradient-danger">
              </form>
             </td>           
          </tr>
          @endforeach
               
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

@endsection