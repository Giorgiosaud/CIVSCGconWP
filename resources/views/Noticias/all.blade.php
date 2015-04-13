@extends('Plantillas.principal')
@section('contenido')

	@foreach($noticias as $i=>$noticia)
		<div class="container-fluid container-fluid-pegadito">
			<div class="col-xs-12 col-sm-6 imagenVertical @if($i%2!=0) pull-right @endif">
				<div class="contenedorImagen">
					{!!wp_get_attachment_image($noticia->meta->imagen_principal,'multiple')!!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 descripcionNoticia">
				<div class="textoNoticia">
					<div class="titulo">
						{!! $noticia->post_title!!}
					</div>
					<div class="descripcion">
						{!! $noticia->post_excerpt!!}
					</div>
					<div class="mostrarMas">
						<a href="{!!route('noticia',$noticia->post_name)!!}"><img
									src="{!! get_theme_mod( 'Leer_mas', 'Leer Mas' ); !!}"
									alt="Leer Mas"/></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	@endforeach
	<div class="container-fluid container-fluid-pegadito">
		<div class="col-xs-12 text-center">
			{!!$noticias->render()!!}
		</div>
	</div>
@endsection