

<div class="seccion1">
	<h2> Panel Administrativo CIVSCG </h2>
		@if (!Auth::guest())
			<h3 align="center"> Usuario: {{Auth::user()->name}} </h3>
		@endif
	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			@if (!Auth::guest())
				<li><a href="{{ url('/auth/logout') }}">Cerrar sesión</a></li>
			@endif

		{{-- 	@if (Auth::guest())
			<li><a href="{{ url('/auth/login') }}"></a>HEY</li>
			<li><a href="{{ url('/auth/register') }}"></a>HEY2</li>
			@else
					<li><a href="{{ url('/auth/logout') }}">Cerrar sesión</a></li>
			@endif --}}
		</ul>
	</div>
	
</div>


