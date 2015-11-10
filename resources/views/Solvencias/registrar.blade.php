@extends('Plantillas.principal')

@section('contenido')

<title>Formulario de Registro</title>



<div class="container">

<h2> Datos Personales</h2>

<form class="form-horizontal">
  <div class="form-group col-xs-12 col-sm-6">
    <label for="CampoNombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="CampoNombre" placeholder="Nombre">
    </div>
  </div>
 

  <div class="form-group col-sm-6">
    <label for="Campo2Nombre" class="col-sm-2 control-label">Segundo Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Campo2Nombre" placeholder="Segundo Nombre">
    </div>
  </div>

<div class="form-group col-sm-6">
    <label for="CampoApellido" class="col-sm-2 control-label">Primer Apellido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="CampoApellido" placeholder="Apellido">
    </div>
  </div>

  <div class="form-group col-sm-6">
    <label for="Campo2Apellido" class="col-sm-2 control-label">Segundo Apellido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Campo2Apellido" placeholder="Segundo Apellido">
    </div>
  </div>

   <div class="form-group">
    <label for="Cedula" class="col-sm-2 control-label">Cedula</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Cedula" placeholder="">
    </div>
  </div>

   <div class="form-group">
    <label for="EstatusCivil" class="col-sm-2 control-label">Estado Civil</label>
    <div class="col-sm-10">
      <select class="form-control">
      	<option value="null">Seleccione</option>
  		<option>Casado(a)</option>
 		<option>Soltero(a)</option>
  	  </select>
    </div>
  </div>

  <div class="form-group">
    <label for="CargasFam" class="col-sm-2 control-label">Cargas Familiares</label>
    <div class="col-sm-10">
      <select class="form-control">
      	<option value="null">Seleccione</option>
  		<option>0</option>
 		<option>1</option>
 		<option>2</option>
 		<option>3</option>
 		<option>+3</option>
  	  </select>
    </div>
  </div>



  <div class="form-group">
    <label for="Sexo" class="col-sm-2 control-label">Sexo</label>
    <div class="col-sm-10">
      <select class="form-control" placeholder="Seleccione">
      	<option value="null">Seleccione</option>
  		<option value="masculino">Masculino</option>
 		<option value="femenino">Femenino</option>
  	  </select>
    </div>
  </div>

   <div class="form-group">
    <label for="Nacionalidad" class="col-sm-2 control-label">Nacionalidad</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Nacionalidad" placeholder="   ">
    </div>
  </div>

  <div class="form-group">
    <label for="Direccion" class="col-sm-2 control-label">Direccion</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="Direccion" rows="3"></textarea> 
    </div>
  </div>


 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

  </form>

  <form class="form-inline">
  <h3> Domicilio </h3>
  <div class="form-group">
	<label for="exampleInputName2">Avenida o calle</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail2">Edificio, casa o quinta:</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
  </div>
</form>
 
 </div>

 

 <div class="container">

<h2> Datos Agremiado</h2>

<form class="form-horizontal">

<div class="form-group">
    <label for="FechaGrado" class="col-sm-2 control-label">Fecha de Grado</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="FechaGrado" placeholder="">
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
      <select class="form-control" placeholder="Seleccione">
      	<option value="null">Seleccione</option>
  		<option>Empleado</option>
 		<option>Desempleado</option>
  	  </select>
    </div>
  </div>

  <div class="form-group">
    <label for="Labora" class="col-sm-2 control-label">Empresa Labora</label>
    <div class="col-sm-10">
      <select class="form-control" placeholder="Seleccione">
      	<option value="null">Seleccione</option>
  		
  		@foreach($empresas as $empresa)

  		<option>{{$empresa->Emp_Nombre}}</option>
 		
 		@endforeach
  	 
  	  </select>
    </div>
  </div>

<div class="form-group">
    <label for="Comision" class="col-sm-2 control-label">Comision CIVSCG</label>
    <div class="col-sm-10">
      <select class="form-control" placeholder="Seleccione">
  		<option>Por definir</option>
  	  </select>
    </div>
  </div>


  <div align="center">
	<button type="button" class="btn btn-success">REGISTRAR</button>
  </div>

  </form>
  </div>

  
	


@endsection