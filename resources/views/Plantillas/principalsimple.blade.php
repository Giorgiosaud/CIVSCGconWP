
<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head(); ?>
@include('Plantillas.assets.headers')
</head>
<header>

		@include('Plantillas.extras.navsimple')

</header>
<body>
@include('flash::message')
@yield('contenido')

{{-- Scripts  --}}
<footer>

	@include('Plantillas.extras.footerjota')
	
</footer>
</body>
</html>
