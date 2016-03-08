
<div class="seccion1">
	<h2>  Colegio de Ingenieros de Venezuela </h2>
	<h3> Seccional Guayana</h3>



		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				@if (!Auth::guest())
				{{-- 	<h3 align="center">{{Auth::user()->name}} </h3> --}}
					<li><a href="{{ url('/auth/logout') }}"> Usuario: {{Auth::user()->name}} [Cerrar sesión]</a></li>

				@endif
			</ul>
		</div>	
</div>
