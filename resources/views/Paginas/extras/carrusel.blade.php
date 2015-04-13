<div id="noticiasPrincipales" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		@foreach($noticias as $i=>$noticia )
			<li data-target="#noticiasPrincipales" data-slide-to="{!!$i!!}" class="@if($i==0)
						active @endif"></li>
		@endforeach

	</ol>
	<div class="carousel-inner" role="listbox">
		@foreach($noticias as $i=>$noticia )
			<div class="item imagenVertical @if($i==0) active @endif">
				<div class="contenedorImagen">
					{!!wp_get_attachment_image($noticia->meta->imagen_principal,'Slider')!!}
				</div>
				<div class="carousel-caption">
					<div class="carruselTitulo">
						{!! $noticia->post_title!!}
					</div>
					<div class="carruselResumen">
						{!! $noticia->post_excerpt!!}
						<div class="mostrarMas">
							<a href="{!!route('noticia',$noticia->post_name)!!}"><img
										src="{!! get_theme_mod( 'Leer_mas', 'Leer Mas' ); !!}"
										alt="Leer Mas"/></a>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
	<a class="left carousel-control" href="#noticiasPrincipales" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Anterior</span>
	</a>
	<a class="right carousel-control" href="#noticiasPrincipales" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Siguiente</span>
	</a>
</div>