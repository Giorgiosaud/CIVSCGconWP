@extends('Plantillas.principal')
@section('contenido')
	<div class="container-fluid container-fluid-pegadito">
		@foreach($Fundaciones as $i=>$fundacion)

			<div class="col-xs-6 col-sm-4 col-md-3 text-center fundacionCuadrada"
			     style="background-color: {!!$fundacion->meta->color_de_la_fundacion!!}">
				<div class="nombreFundacion" style="color:{!!$fundacion->meta->color_del_texto!!}">
					<a href="{!!route('fundacion',$fundacion->post_name)!!}">{!! $fundacion->post_title!!}</a>
				</div>
			</div>
		@endforeach
	</div>
@endsection