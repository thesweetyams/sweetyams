<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sweet Yams</title>
	<meta name="publishable_key" content="{{$_ENV['STRIPE_PUBLISHABLE_KEY']}}">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/slider-simp.css">
	<link rel="icon" href="/img/navicons/sweetyamsfinal.png">
	<link href='https://fonts.googleapis.com/css?family=Handlee|Slabo+27px' rel='stylesheet' type='text/css'>
	@yield('css')
</head>
<body class="Site">

	<div class="wrapper">
		@include('.partials.navbar')
	</div>

	<div class="desktop-content">
		<div class="content-container content-container--create content-container--confirm">
			@yield('content')
		</div>
	</div>

	@include('.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.22/vue.js"></script>
	<script src="/js/components.js"></script>
  	<script src="/js/main.js"></script>
	@yield('js')
</body>
</html>
