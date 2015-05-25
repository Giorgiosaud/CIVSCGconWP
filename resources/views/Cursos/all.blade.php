@extends('Plantillas.principal')
@section('contenido')
	@include('Cursos.extras.topImage')
	@include('Cursos.extras.tags')
	@foreach($cursos as $i=>$curso)
		<div class="container-fluid container-fluid-pegadito cursos">
			<div class="col-xs-12 col-sm-6 imagenVertical @if($i%2!=0) pull-right @endif">
				<div class="contenedorImagen">
					{!!wp_get_attachment_image($curso->meta->imagen_principal,'multiple')!!}
				</div>

			</div>
			<div class="col-xs-12 col-sm-6 descripcionNoticia">

				<div class="textoNoticia">
					<div class="titulo">
						{!! $curso->post_title!!}
					</div>
					<div class="descripcion">
                        @if($curso->post_excerpt!='')
                            {!! $curso->post_excerpt!!}
                        @else
                            {!! recortar_palabras($curso->post_content,40) !!}
                        @endif
					</div>
					<div class="mostrarMas">
						<a href="{!!route('detalleCursos',$curso->post_name)!!}"><img
									src="{!! get_theme_mod( 'Leer_mas', 'Leer Mas' ); !!}"
									alt="Leer Mas"/></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="fecha @if($i%2!=0) derecha @endif">{!!CarbonLoc::diffForHumans2($curso->FechaDeCurso)!!}</div>

		</div>

	@endforeach
	<div class="container-fluid container-fluid-pegadito">
		<div class="col-xs-12 text-center">
			{!!$cursos->render()!!}
		</div>
	</div>
@endsection