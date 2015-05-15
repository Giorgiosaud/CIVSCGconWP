{!!
Navbar::setType('navbar-civscg')
->fluid()
->withBrand('<img src="'.get_header_image().'" width="'.get_custom_header()->width.'"
					     height="'.get_custom_header()->height.'"
					     alt="'.esc_attr(get_bloginfo('name', 'display')).'">', url("/"))
->withContent('<h1 class="tituloPrincipal">'.get_bloginfo( 'name' ).'</h1>')
->withContent(


	Navigation::links(
		[

			[
				'link' => URL::route('inicio'),
				'title' => 'Inicio'
			],
			[
				'link' => URL::route('noticias'),
				'title' => 'Noticias'
			],
			[
				'link' => URL::route('areaInscripciones'),
				'title' => 'Inscripcion'
			],
			[
				'link' => URL::route('cursos'),
				'title' => 'Cursos'
			],
			[
				'link' => URL::route('fundacionesycomisiones'),
				'title' => 'Fundaciones y Comisiones'
			],
			[
				'link' => URL::route('eventos'),
				'title' => 'Eventos'
			],
			[
				'link' => url('/quienes-somos'),
				'title' => 'Somos'
			],
			[
				'link' => url('/contactanos'),
				'title' => 'Contáctanos'
			],
		]
	)->withAttributes([
	'id'=>'navbar-principal'])

)
!!}

<div class="clearfix loading"></div>