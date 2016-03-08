@extends('Plantillas.principalsimple')

@section('contenido')




<div class="texto-color2">
<div class="solv2">
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

<h2 align="center"> Datos Agremiado</h2>
{{-- <h4>{{\Auth::user()->name}}</h4> --}}


<div class="col-xs-12 col-md-8 col-md-offset-3">

<form class="form-horizontal" role="form" method="POST" action="{{ route('registrarseagrem') }}" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
    <label class="col-sm-2 control-label">Universidad que Egreso</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="id_universidad" value="{{$agremiado_new->universidad->Uni_Nombre}}" disabled="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Nro de CIV</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="civ" value="{{$agremiado_new->civ}}" disabled="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Especialidad</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="id_especialidad" value="{{$agremiado_new->especialidad->Esp_Nombre}}" disabled="">
    </div>
  </div>

  <div class="form-group">
    <label for="Cond_Laboral" class="col-sm-2 control-label">Condicion Laboral</label>
    <div class="col-sm-6">
      <select class="form-control" name="cond_laboral">
        <option value="null">Seleccione</option>
      <option>Empleado</option>
    <option>Desempleado</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Fecha de Grado</label>
    <div class="col-sm-6">
      <input type="string" class="form-control" name="fecha_grado" value="{{$agremiado_new->fecha_grado}}"      disabled="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Fecha de inscripcion</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="fecha_inscripcion" value="{{$agremiado_new->fecha_inscripcion}}" disabled="">
    </div>
  </div>

   <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Correo electronico</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="email"  value="{{$agremiado_new->email}}">
     </div>
  </div>

 <div class="form-group">
    <label for="Labora" class="col-sm-2 control-label">Empresa Labora</label>
    <div class="col-sm-6">
      <select class="form-control" name="empresa_labora" placeholder="Seleccione">
        <option value="null">Seleccione</option>
      
      @foreach($empresas as $empresa)

      <option>{{$empresa->Emp_Nombre}}</option>
    
    @endforeach

      <option value="otra">OTRA EMPRESA</option>
     
      </select>
    </div>
  </div>



<div class="form-group">
  <label for="Comision" class="col-sm-2 control-label">Comision deseada</label>
    <div class="col-sm-6">
      <select class="form-control" name="comision" placeholder="Seleccione">
      <option value="null">Seleccione</option>

      @foreach($comisiones as $comision) 

      <option class="comision">{{$comision->comision}}</option>
    
    @endforeach 
  
      </select>
    </div>
  </div>

  
    <div align="center" class="limpiar">
  <button type="submit" class="btn btn-success">REGISTRAR</button>
  </div>

  </form>

    </div>
</div>
 </div>  
 </div>


  @endsection