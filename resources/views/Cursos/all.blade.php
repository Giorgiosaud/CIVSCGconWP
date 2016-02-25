@extends('Plantillas.principal')
@section('contenido')
	@include('Cursos.extras.topImage')
	@include('Cursos.extras.tags')
	<div id="Cursos">
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
	</div>
	<div class="container-fluid container-fluid-pegadito">
		<div class="col-xs-12 text-center">
			{!!$cursos->render()!!}
		</div>
	</div>
@endsection
