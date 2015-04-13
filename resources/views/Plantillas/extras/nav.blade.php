<nav class="navbar navbar-default navbar-civscg">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
			        data-target="#navbar-principal">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			@if( get_header_image() )
				<a class="navbar-brand" href="{{ url('/') }}" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>"
					     height="<?php echo get_custom_header()->height; ?>"
					     alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
				</a>
				<div class="clearfix"></div>
			@else
				<a class="navbar-brand" href="#">CIVSCG</a>

			@endif
		</div>

		<div class="collapse navbar-collapse" id="navbar-principal">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('noticias') }}">Noticias</a></li>
				<li><a href="{{ url('/inscripciones') }}">Inscripción</a></li>
				<li><a href="{{ url('/cursos') }}">Cursos</a></li>
				<li><a href="{{ url('/fundacionesycomisiones') }}">Fundaciones y Comisiones</a></li>
				<li><a href="{{ url('/calendario') }}">Calendario</a></li>
				<li><a href="{{ url('/quienes-somos') }}">Somos</a></li>
			</ul>

			{{--<ul class="nav navbar-nav navbar-right">--}}
				{{--<li>--}}
					{{--<div id="searchwrapper"><form action="">--}}
							{{--<input type="text" class="searchbox" name="s" value="" />--}}
							{{--<input type="image" src="/images/lupa.png" class="searchbox_submit" value="" />--}}
						{{--</form>--}}
					{{--</div>--}}
				{{--</li>--}}

				{{--@if (Auth::guest())--}}
					{{--<li><a href="{{ url('/auth/login') }}">Login</a></li>--}}
					{{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
				{{--@else--}}
					{{--<li class="dropdown">--}}
						{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{--}}
							{{--Auth::user()->name }} <span class="caret"></span></a>--}}
						{{--<ul class="dropdown-menu" role="menu">--}}
							{{--<li><a href="{{ url('/auth/logout') }}">Logout</a></li>--}}
						{{--</ul>--}}
					{{--</li>--}}
				{{--@endif--}}
			</ul>
		</div>
	</div>
</nav>
<div class="clearfix loading"></div>