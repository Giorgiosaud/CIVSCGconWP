@include('Plantillas.assets.headers')

@include('Plantillas.extras.navjota')


<form role="form" class="marginform">
  <fieldset disabled>  

<div class="form-group col-xs-12 col-sm-6">
      <label class="col-sm-2 control-label">Número de CIV</label>
     <div class="col-sm-10">
      <input type="text" class="form-control" name=" " value="{{$agremiado->civ }}">
     </div>
  </div>

  {{-- value=@{{ $persona_new->Nombre  }} --}}
 

  <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Correo electrónico</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" value="{{$agremiado->email}}">
    </div>
  </div>

<div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Fecha de Grado</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fecha_grado"  value="{{$agremiado->fecha_grado}}">
    </div>
  </div>

  <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Fecha de inscripción</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fecha_inscripcion" value="{{$agremiado->fecha_inscripcion}}">
    </div>
  </div>

   <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Condición Laboral</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cond_laboral"  value="{{$agremiado->cond_laboral}}">
    </div>
  </div>

   <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Empresa trabaja</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" name="empresa_labora" value="{{$agremiado->empresa_labora}}">
    </div>
  </div>

    <div class="form-group col-sm-6">
    <label class="col-sm-4 control-label"> Comision a la que desea pertenecer</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="comision" value="{{$agremiado->comision}}">
    </div>
  </div>

   </fieldset>
  </form>


  