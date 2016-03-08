
@extends('Plantillas.principaladmin')

@section('contenido')

<div class="solv3">
<div class="texto-color3">

<h1 align="center">Panel Administrativo CIVSCG</h1>
<h2 align="center">Usuario: {{\Auth::user()->name}}</h2>

</div>
<nav class="navbar navbar-v navbar-default" role="navigation">

  

  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header navbar-header-v">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <a class="navbar-brand" href="{!! route('paneladmin.solvencia') !!}">Solvencia</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse collapse-v navbar-collapse navbar-collapse-v navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-nav-v">
        <li><a href="{!! route('mostrar.persona') !!}" >Datos Personales</a></li>
    </ul>
 
  <ul class="nav navbar-nav navbar-nav-v navbar-right navbar-right-v">
      <li><a href="{!! route('paneladmin.agremiado') !!}">Datos Agremiado</a></li>
  </ul>
  </div><!-- /.navbar-collapse-v -->

  </nav>
    
    <div class="cuerpo">
    </div>

    </div>



  @endsection