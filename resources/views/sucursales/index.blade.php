@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista sucursales</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Sucursal.create') }}" class="btn btn-info" >Añadir sucursales</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Direccion</th> 
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($sucursales->count())  
              @foreach($sucursales as $sucursal)  
              <tr>
                <td>{{$sucursal->suc_nombre}}</td> 
                <td>{{$sucursal->suc_direccion}}</td> 
               <td><a class="btn btn-primary btn-xs" href="{{action('SucusalController@edit', $sucursal->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('SucusalController@destroy', $sucursal->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $sucursales->links() }}
    </div>
  </div>
</section>
 
@endsection