@extends('Plantillas.principal')

@section('contenido')

	<div class="container">

		<div class="col-xs-12 noticiaCompleta">
			
			<h2>Solvencia</h2>


<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Usuario">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Recordarme
        </label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="button" class="btn btn-success">Ingresar</button>
     {{--  <button href='' type="button" class="btn btn-primary">Registrarse</button> --}}
      <a href="{!!route('crearuser',array('slug'=>'registrar'))!!}" class="btn btn-primary" role="button">Registrarse</a>
    </div>
  </div>
</form>			

		</div>
	</div>

@endsection