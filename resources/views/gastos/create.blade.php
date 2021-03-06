@extends('layouts.app')
@section('content')
<div class="container">
<section class="content" >
<div class="row  "> 
<div class="col-md-8 col-md-offset-2"> 
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo registro de Gasto</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('gastos.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="fecha" id="fecha" class="form-control input-sm" placeholder="Fecha del gasto">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Descripcion de Gasto">
									</div>
								</div>
							</div>
 
							 <div class="row">
                             <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="importe" id="importe" class="form-control input-sm" placeholder="Importe">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="concepto" id="concepto" class="form-control input-sm" placeholder="Concepto">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="grupo_id" id="grupo_id" class="form-control input-sm" placeholder="Grupo">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="id_pago" id="id_pago" class="form-control input-sm" placeholder="id_pago">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="id_factura" id="id_factura" class="form-control input-sm" placeholder="id_factura">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="id_proveedor" id="id_proveedor" class="form-control input-sm" placeholder="id_proveedor">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="id_costos" id="id_costos" class="form-control input-sm" placeholder="id_costos">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="id_sucursal" id="id_sucursal" class="form-control input-sm" placeholder="id_sucursal">
									</div>
								</div>
							</div>
							 
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('gastos.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
</section> 
</div>
	@endsection