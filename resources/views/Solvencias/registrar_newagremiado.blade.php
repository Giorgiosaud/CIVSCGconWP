@extends('Plantillas.principal2')

@section('contenido')


<div class="container">

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

<h2> Datos Agremiado</h2>
<h4>{{\Auth::user()->name}}</h4>

<form class="form-horizontal" role="form" method="POST" action="{{ route('registrarseagrem') }}" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
    <label for="FechaGrado" class="col-sm-2 control-label">Fecha de Grado</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="fecha_grado" id="FechaGrado" placeholder="">
    </div>
  </div>

    <div class="form-group">
    <label for="Especialidad" class="col-sm-2 control-label">Especialidad</label>
    <div class="col-sm-10">

      <select class="form-control" placeholder="Seleccione">
      <option value="null">Seleccione</option>

      @foreach($especialidades as $especialidad) 

  		<option class="Esp_Nombre">{{$especialidad->Esp_Nombre}}</option>
 	  
 	  @endforeach	
  
  	  </select>
    </div>
  </div>

   <div class="form-group">
    <label for="Universidad" class="col-sm-2 control-label">Universidad Egreso</label>
    <div class="col-sm-10">
      <select class="form-control" placeholder="Seleccione">
      <option value="null">Seleccione</option>

      @foreach($universidades as $universidad) 

  		<option class="Uni_Nombre">{{$universidad->Uni_Nombre}}</option>
 	  
 	  @endforeach	
  
  	  </select>
    </div>
  </div>

  <div class="form-group">
    <label for="Cond_Laboral" class="col-sm-2 control-label">Condicion Laboral</label>
    <div class="col-sm-10">
      <select class="form-control" name="cond_laboral" placeholder="Seleccione">
      	<option value="null">Seleccione</option>
  		<option>Empleado</option>
 		<option>Desempleado</option>
  	  </select>
    </div>
  </div>

  <div class="form-group">
    <label for="Labora" class="col-sm-2 control-label">Empresa Labora</label>
    <div class="col-sm-10">
      <select class="form-control" name="empresa_labora" placeholder="Seleccione">
      	<option value="null">Seleccione</option>
  		
  		@foreach($empresas as $empresa)

  		<option>{{$empresa->Emp_Nombre}}</option>
 		
 		@endforeach
  	 
  	  </select>
    </div>
  </div>

<div class="form-group">
  <label for="Comision" class="col-sm-2 control-label">Comision a la que desea pertenecer</label>
    <div class="col-sm-10">
      <select class="form-control" name="comision" placeholder="Seleccione">
      <option value="null">Seleccione</option>

      @foreach($comisiones as $comision) 

      <option class="comision">{{$comision->comision}}</option>
    
    @endforeach 
  
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="fecha_inscrip" class="col-sm-2 control-label">Fecha Inscripción</label>
    <div class="col-sm-10">
      <input type="date" name="fecha_inscripcion" value="{{date("Y-m-d")}}" disabled="">
      </select>
    </div>
  </div>

  <div align="center">
	<button type="submit" class="btn btn-success">REGISTRAR</button>
  </div>

  </form>
  </div>

  @endsection