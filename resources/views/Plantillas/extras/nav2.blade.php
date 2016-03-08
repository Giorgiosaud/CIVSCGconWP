{!!
Navbar::setType('navbar-civscg')
->fluid()
->withBrand('<img src="'.get_header_image().'" width="'.get_custom_header()->width.'"
					     height="'.get_custom_header()->height.'"
					     alt="'.esc_attr(get_bloginfo('name', 'display')).'">', url("/"))
->withContent('<h1 class="tituloPrincipal">'.get_bloginfo( 'name' ).'</h1>')


!!}

<div class="clearfix loading"></div>