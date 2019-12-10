@extends('layouts.app')
@section('content')
<div class="container">
<section class="content" >
<div class="row  "> 
<div class="col-md-8 col-md-offset-2">
			  
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Datos registro</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('gastos.update',$gasto->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="fecha" id="fecha" class="form-control input-sm" value="{{$gasto->fecha}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="descripcion" id="descripcion" class="form-control input-sm" value="{{$gasto->descripcion}}">
									</div>
								</div>
							</div>
 
						 	<div class="row">
                             <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="importe" id="importe" class="form-control input-sm" value="{{$gasto->importe}}">
									</div>
								</div>
							
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="concepto" id="concepto" class="form-control input-sm" value="{{$gasto->concepto}}">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="grupo_id" id="grupo_id" class="form-control input-sm" value="{{$gasto->grupo_id}}">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="id_factura" id="id_factura" class="form-control input-sm" value="{{$gasto->id_factura}}">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="id_pago" id="id_pago" class="form-control input-sm" value="{{$gasto->id_pago}}">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="id_costos" id="id_costos" class="form-control input-sm" value="{{$gasto->id_costos}}">
									</div>
								</div>
							 </div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('gastos.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
								
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div> 
		</div> 
</section> 
</div>
	@endsection