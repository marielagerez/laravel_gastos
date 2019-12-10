@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-xs-12 col-sm-12 col-md-12" >

                    <div class="table-container">
                          <table id="mytable" class="table table-bordred table-striped">
                          <thead>
                            <th>Nombre</th>
                            <th>Domicilio</th> 
                            <th>Ver Gastos</th>
                            <th>Editar Perfil</th>
                            <th>Eliminar</th>
                          </thead>
                          <tbody>
                            @if($sucursales->count())  
                            @foreach($sucursales as $suc)  
                            <tr>
                              <td>{{$suc->suc_nombre}}</td>
                              <td>{{$suc->suc_direccion}}</td> 
                            <td><a class="btn btn-primary btn-xs" href="{{action('GastoController@index')}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                            <td><a class="btn btn-primary btn-xs" href="{{action('SucursalController@edit', $suc->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                              <td>
                                <form action="{{action('SucursalController@destroy', $suc->id)}}" method="post">
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
            </div>
        </div>
    </div>
</div>
@endsection
