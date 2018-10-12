<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">


	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{asset('css/theme.css')}}" rel="stylesheet">
	
	<title>Dashboard</title>
</head>
<body>
	<nav class="navbar navbar-light">
			<div class="container"> <a class="navbar-brand text-primary" href="{{route('home')}}">
					<i class="fa d-inline fa-lg fa-circle"></i>
					<b> LOGO<br></b>
				</a> </div>
			</nav>
	<div class="container">
		
	@yield("content")
		


	@yield('footer')

</div>
<div class="py-3">
		<div class="container">
			<div class="row">
			<div class="col-md-12 text-center">
				<p class="mb-0">© 2018 Sistema. All rights reserved</p>
			</div>
			</div>
		</div>
		</div>
</body>
</html>