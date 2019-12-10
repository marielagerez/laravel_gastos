@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-xs-12 col-sm-12 col-md-12" >
                                    <a   href="{{ route('logout') }}"  class="btn btn-info btn-block" > Identificadores ingresados </a>
                                    <a   href="{{ route('logout') }}" class="btn btn-info btn-block" > Ver Sucursal</a>
                                    <a   href="{{ route('gastos.init') }}"  class="btn btn-info btn-block" > Ver Reportes</a> 
                    </div>	
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
