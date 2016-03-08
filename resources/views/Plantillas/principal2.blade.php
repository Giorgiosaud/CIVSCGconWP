<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head(); ?>
@include('Plantillas.assets.headers')
</head>
<header>

		@include('Plantillas.extras.nav2')

</header>
<body>
@include('flash::message')
@yield('contenido')

<!-- Scripts 
<footer>
	<?php wp_footer(); ?>

	@include('Plantillas.extras.footer')
	<script src="{!! elixir('js/all.js') !!}"></script>
</footer> -->
</body>
</html>
