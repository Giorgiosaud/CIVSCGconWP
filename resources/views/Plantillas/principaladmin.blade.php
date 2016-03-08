<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head(); ?>
@include('Plantillas.assets.headers')
</head>
<header>

		@include('Plantillas.extras.navjota')

</header>
<body>
@include('flash::message')
@yield('contenido')

<footer>

	@include('Plantillas.extras.footerjota')
	
</footer>

</body>
</html>
