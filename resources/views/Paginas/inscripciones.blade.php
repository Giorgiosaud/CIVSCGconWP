@extends('Plantillas.principal')
@section('contenido')
	<div class="container-fluid container-fluid-pegadito">
		<div class="col-xs-12 col-sm-4 text-center banner imagenHorizontal incsrpcionesBannerInterno">
			<div class="contenedorImagen">
				{!! wp_get_attachment_image($pagina->meta->imagen_beneficios,'imagenVertical') !!}
			</div>
			<div class="botonBanner">
				<a href="">{!!$pagina->meta->texto_beneficios!!}</a></div>
		</div>
		<div class="col-xs-12 col-sm-4 text-center banner imagenHorizontal incsrpcionesBannerInterno">
			<div class="contenedorImagen">
				{!! wp_get_attachment_image($pagina->meta->imagen_requisitos,'imagenVertical') !!}
			</div>
			<div class="botonBanner">
				<a href="">{!!$pagina->meta->texto_requisitos!!}</a></div>
		</div>
		<div class="col-xs-12 col-sm-4 text-center banner imagenHorizontal incsrpcionesBannerInterno">
			<div class="contenedorImagen">
				{!! wp_get_attachment_image($pagina->meta->imagen_solvencias,'imagenVertical') !!}
			</div>
			<div class="botonBanner">
				<a href="">{!!$pagina->meta->texto_solvencias!!}</a></div>
		</div>

		<div class="clearfix"></div>
@endsection