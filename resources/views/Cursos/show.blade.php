@extends('Plantillas.principal')
@section('contenido')
	<div class="container-fluid cursosSingle">

		<div class="col-xs-12 col-sm-4 text-center bannerCurso imagenHorizontal incsrpcionesBannerInterno ">
			<div class="contenedorImagen">
				{!!wp_get_attachment_image($curso->meta->imagen_principal,'verticalCurso')!!}

			</div>

		</div>
		<div class="fecha ">{!!CarbonLoc::diffForHumans2($curso->FechaDeCurso)!!}</div>

		<div class="col-xs-12 col-sm-8 text-center tituloCurso">
				{!! $curso->post_title!!}
		</div>
		<div class="col-xs-12 col-sm-8 contenidoCurso">
			@if($curso->profesor!='')
                                                        <div classs="profesor">
                                                                <i class="fa fa-user"></i>Profesor: {!! $curso->profesor !!}
                                                        </div>
                                                @endif
                                                @if($curso->precio!='')
                                                <div classs="precio">
                                                        <i class="fa fa-money"></i>Precio: {!! $curso->precio !!} Bs.
                                                </div>
                                                @endif
                                                @if($curso->duracion!='')
                                                <div classs="duracion">
                                                        <i class="fa fa-clock-o"></i>Duracion: {!! $curso->duracion !!}
                                                </div>
                                                @endif
			<p>	{!!apply_filters('the_content',$curso->post_content)!!}</p>


		</div>
	</div>
	<div class="container-fluid">
		<div class="col-xs-12 text-center">
		<h1>¿Deseas participar en este curso? Entonces Llena el Formulario Siguiente</h1>
		</div>
		</div>
	<div class="container formulario">
		<div class="col-xs-12">
			@include('Cursos.extras.formularioCurso')
		</div>
	</div>

@endsection
