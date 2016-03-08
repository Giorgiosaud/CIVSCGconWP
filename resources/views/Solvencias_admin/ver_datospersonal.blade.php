@include('Plantillas.assets.headers')

@include('Plantillas.extras.navjota')


<form role="form" class="marginform">
  <fieldset disabled>  

<div class="form-group col-xs-12 col-sm-6">
      <label class="col-sm-2 control-label">Nombre</label>
     <div class="col-sm-10">
      <input type="text" class="form-control" name="nombre" value="{{$persona->nombre}}">
     </div>
  </div>

  {{-- value=@{{ $persona_new->Nombre  }} --}}
 

  <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Segundo Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="segundo_nombre" value="{{$persona->segundo_nombre}}">
    </div>
  </div>

<div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Primer Apellido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="apellido"  value="{{$persona->apellido}}">
    </div>
  </div>

  <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Segundo Apellido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="segundo_apellido" value="{{$persona->segundo_apellido}}">
    </div>
  </div>

   <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Cedula</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cedula"  value="{{$persona->cedula}}">
    </div>
  </div>

   <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Estado Civil</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" name="estado_civil" value="{{$persona->estado_civil}}">
    </div>
  </div>

    <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Sexo</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="sexo" value="{{$persona->sexo}}">
    </div>
  </div>

   <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Cargas Familiares</label>
    <div class="col-sm-2">
      <input name="cargas_fami" class="form-control" value="{{$persona->cargas_fami}}" enabled>
      </select>
    </div>
  </div>




    <div class="form-group col-sm-12">
    <label for="Direccion" class="col-sm-1 control-label">Direccion</label>
    <div class="col-sm-10">
      <input name="direccion" class="form-control" name="direccion" value="{{$persona->direccion}}" rows="3"> 
    </div>
  </div>

     </fieldset>
  </form>
   {{-- <div class="form-group col-sm-6">
    <label for="Nacionalidad" class="col-sm-2 control-label">Nacionalidad</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="Nacionalidad" placeholder="   ">
    </div>
  </div> --}}


