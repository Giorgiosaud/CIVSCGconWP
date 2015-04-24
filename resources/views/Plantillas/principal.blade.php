<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>@yield('titulo','CIVSCG')</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="{!! elixir('css/all.css') !!}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<![endif]-->
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
