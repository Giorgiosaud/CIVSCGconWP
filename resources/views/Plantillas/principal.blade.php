<!DOCTYPE html>
<html lang="en">
<head>
@include('Plantillas.assets.headers')
</head>
<header>
		@include('Plantillas.extras.nav')
</header>
<body>
@include('flash::message')
@yield('contenido')

<!-- Scripts -->
<footer>
	@include('Plantillas.extras.footer')

	<script src="{!! elixir('js/all.js') !!}"></script>
</footer>
</body>
</html>
