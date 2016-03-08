
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
    
    <div class="tex_col">
    <a class="navbar-brand" class="tex_col" href="{!! route('paneladmin.solvencia_administrador') !!}">Solvencia</a>
    </div>
  </div>


  </nav>
    
   {{--  <div class="cuerpo">
    </div> --}}

    </div>



  @endsection