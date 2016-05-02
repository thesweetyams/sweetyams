<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="publishable_key" content="{{$_ENV['STRIPE_PUBLISHABLE_KEY']}}">
	<title>Sweet Yams</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Handlee|Slabo+27px' rel='stylesheet' type='text/css'>
	@yield('css')
</head>
<body>
	<div class="wrapper">
		@include('.partials.navbar')
		@yield('content')
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	@yield('js')
</body>
