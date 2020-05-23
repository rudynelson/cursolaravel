@extends('layouts.admin')
@section('contenedor')


<div align="center">
  <p>LISTAR PROFESIONES</p>

</div>

  <a href="{{route('profesion.create')}}">INGRESAR NUEVA PROFESION</a>  
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
                  <th>PROFESION</th>
                  <th>ESTADO</th>
                  <th>OPCIONES</th>
              </tr>
              </thead>
            <tbody>
          @foreach($profesionvar as $prof)
          <tr>
            <td>{{$prof->id}}</td>
            <td>{{$prof->nombre_profesion}}</td>            
            <td>{{$prof->estado}}</td>            
            <td><a href="{{route('profesion.edit',$prof->id)}}" class="btn btn-block    bg-gradient-primary">Editar</a>
              

              <form action="{{route('profesion.destroy',$prof->id)}}" method="POST">
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