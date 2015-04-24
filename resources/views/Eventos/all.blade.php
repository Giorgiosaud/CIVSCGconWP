@extends('Plantillas.principal')
@section('contenido')
	@include('Eventos.extras.topImage')
	{{--@include('Cursos.extras.tags')--}}
	@foreach($eventos as $i=>$evento)
		<div class="container-fluid container-fluid-pegadito cursos">
			<div class="col-xs-12 col-sm-6 imagenVertical @if($i%2!=0) pull-right @endif">
				<div class="contenedorImagen">
					{!!wp_get_attachment_image($evento->meta->imagen_principal,'multiple')!!}
				</div>

			</div>
			<div class="col-xs-12 col-sm-6 descripcionNoticia">

				<div class="textoNoticia">
					<div class="titulo">
						{!! $evento->post_title!!}
					</div>
					<div class="descripcion">
						{!! $evento->post_excerpt!!}
					</div>
					<div class="mostrarMas">
						<a href="{!!route('eventoIndividual',$evento->post_name)!!}"><img
									src="{!! get_theme_mod( 'Leer_mas', 'Leer Mas' ); !!}"
									alt="Leer Mas"/></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
{{--			{!!$evento->meta->fecha_evento!!}--}}
			<div class="fecha @if($i%2!=0) derecha @endif">{!!CarbonLoc::diffForHumans2($evento->FechaDeEvento)!!}</div>

		</div>

	@endforeach
	<div class="container-fluid container-fluid-pegadito">
		<div class="col-xs-12 text-center">
			{!!$eventos->render()!!}
		</div>
	</div>
@endsection