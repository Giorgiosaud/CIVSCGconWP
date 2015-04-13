@extends('Plantillas.principal')
@section('contenido')
	<div class="container-fluid container-fluid-pegadito">
		<div class="col-xs-12 imagenHorizontal">

			<div class="contenedorImagen">
				{!!wp_get_attachment_image($noticia->meta->imagen_principal,'individualPrincipal')!!}
			</div>
		</div>
	</div>
	<div class="container-fluid">


		<div class="col-xs-12 topIndividual">
			<div class="textoIndividualNoticia">
				<div class="tituloIndividual pull-left">
					{!! $noticia->post_title!!}
				</div>
				<div class="volverANoticias pull-right">
					<a href="{!!route('noticias')!!}"><img
								src="{!! get_theme_mod( 'volver_a_noticias', 'Volver a Noticias' ); !!}"
								alt="Volver a Noticias"/></a>
				</div>

			</div>
		</div>
		<div class="col-xs-12 noticiaCompleta">
				{!! $noticia->post_content!!}
		</div>
	</div>

@endsection