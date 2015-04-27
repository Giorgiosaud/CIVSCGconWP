@extends('Plantillas.principal')
@section('contenido')
	<div class="container-fluid container-fluid-pegadito">
		<div class="col-xs-12 imagenHorizontal">

			<div class="contenedorImagen">
				{!!wp_get_attachment_image($pagina->meta->imagen_principal,'individualPrincipal')!!}
			</div>
		</div>
	</div>
	<div class="container">
		
		<div class="col-xs-12 noticiaCompleta">
			<p>	{!!apply_filters('the_content',$pagina->post_content)!!}</p>

		</div>
	</div>

@endsection