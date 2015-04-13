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
				{!! $curso->post_content!!}
		</div>
	</div>
	<div class="container-fluid Formulario">
		<div class="col-xs-12 text-center">
		<h1>¿Deseas participar en este curso? Entonces Llena el Formulario Siguiente</h1>
		</div>
	</div>

@endsection