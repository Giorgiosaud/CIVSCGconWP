@extends('Plantillas.principal')
@section('contenido')
	<div class="container-fluid container-fluid-pegadito">
		<div class="col-xs-12 col-sm-6 sliderInicio">
			@include('Paginas.extras.carrusel')
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-12 text-center banner imagenVertical incsrpcionesBanner">
				<div class="contenedorImagen">
					{!! wp_get_attachment_image($pagina->meta->imagen_inscripciones,'bannerGrande') !!}
				</div>
				<div class="botonBanner">Inscripciones y Requisitos</div>
			</div>
			<div class="col-xs-6 text-center banner imagenVertical cursosBanner">
				<div class="contenedorImagen">

				{!! wp_get_attachment_image($pagina->meta->imagen_cursos,'bannerGrande') !!}
</div>
				<div class="botonBanner">
					Cursos y Adiestramiento
				</div>
			</div>
			<div class="col-xs-6 text-center banner imagenVertical fundacionBanner">
				<div class="contenedorImagen">

				{!! wp_get_attachment_image($pagina->meta->imagen_fundacion,'bannerGrande') !!}
</div>
				<div class="botonBanner">
					Fundaciones Ascociadas
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
@endsection