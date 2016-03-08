
@extends('Plantillas.principalsimple')

@section('contenido')

{{-- <div class="title">
<h2 align="center"> Comprobacion de existencia Agremiado en Sistema </h2>
</div> --}}

<div class="solv">

<div class="container-fluid">

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif


<form class="form-inline" role="form" method="POST" action="{{ route('consult_ced') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">



  <div id="contenedor" class="texto-color">
      <h2 align="center"> Verificación Cédula de Identidad </h2>
  	     <label for="procedencia"></label>
         <label for="campo_cedula">Cedula de Identidad</label>
        <input type="integer" class="form-control" name="CEDULA" id="campo_cedula" placeholder="Introduzca Cedula" >
      <div class="modfboton" align="center">
	    <button type="submit" class="btn btn-primary">Consultar</button>
      </div>
  </div>
</form>
</div>
</div>


@endsection
