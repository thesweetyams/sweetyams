@extends('master')
@section('css')
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
@stop

@section('content')

@stop

@section('js')
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.your-class').slick({
			setting-name: setting-value
		});
	});

	</script>
@stop
