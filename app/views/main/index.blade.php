@extends('master')
@section('css')
	<link rel="stylesheet" href="/css/slider-simp.css" media="screen" title="no title" charset="utf-8">
@stop

@section('content')
	<h1 class="flex__title" id="welcome">Welcome to Sweet Yams!</h1>
	<div id="slider">
		<div class="slides">
			<!-- Second slide -->
			<div class="slider">
				<div class="images">
					<img src="/img/pictures/mural.jpeg">
				</div>
			</div>
			<!-- Second slide -->
			<div class="slider">
				<div class="images">
					<img src="/img/pictures/sweetpotato3.jpeg">
				</div>
			</div>
			<!-- Third slide -->
			<div class="slider">
				<div class="images">
					<img src="/img/pictures/organic.jpeg">
				</div>
			</div>
			<!-- Fourth slide -->
			<div class="slider">
				<div class="images">
					<img src="/img/pictures/juice.jpeg">
				</div>
			</div>
		</div>
	</div>


@stop

@section('js')
@stop
