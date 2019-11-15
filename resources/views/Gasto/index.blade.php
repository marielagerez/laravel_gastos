@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Gastos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('gasto.create') }}" class="btn btn-info" >Añadir Gastos</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Fecha</th>
               <th>Descripcion</th>
               <th>Importe</th>
               <th>Concepto</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($gastos->count())  
              @foreach($gastos as $gasto)  
              <tr>
                <td>{{$gasto->fecha}}</td>
                <td>{{$gasto->descripcion}}</td>
                <td>{{$gasto->importe}}</td>
                <td>{{$gasto->concepto}}</td>
               <td><a class="btn btn-primary btn-xs" href="{{action('GastoController@edit', $gasto->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('GastoController@destroy', $gasto->id)}}" method="post">
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
      {{ $gastos->links() }}
    </div>
  </div>
</section>
 
@endsection