@extends('master')
@section('css')
	<link rel="stylesheet" href="/css/slider-simp.css" media="screen" title="no title" charset="utf-8">
@stop

@section('content')
	<div id="slider">
		<div class="slides">
			<!-- First slide -->
			<div class="slider">
				<div class="legend"></div>
				<div class="content">
					<div class="content-txt">
						<h1> Your title </h1>
						<h2> Your description </h2>
					</div>
				</div>
				<div class="slider__image">
					<img src="/img/pictures/mural.jpeg">
				</div>
			</div>
			<!-- Second slide -->
			<div class="slider">
				<div class="legend"></div>
				<div class="content">
					<div class="content-txt">
						<h1> Your title </h1>
						<h2> Your description </h2>
					</div>
				</div>
				<div class="slider__image">
					<img src="/img/pictures/chocolate.jpeg">
				</div>
			</div>
			<!-- Third slide -->
			<div class="slider">
				<div class="legend"></div>
				<div class="content">
					<div class="content-txt">
						<h1> Your title </h1>
						<h2> Your description </h2>
					</div>
				</div>
				<div class="slider__image">
					<img src="/img/pictures/fruitsalad.jpeg">
				</div>
			</div>
			<!-- Fourth slide -->
			<div class="slider">
				<div class="legend"></div>
				<div class="content">
					<div class="content-txt">
						<h1> Your title </h1>
						<h2> Your description </h2>
					</div>
				</div>
				<div class="slider__image">
					<img src="/img/pictures/lemon.jpeg">
				</div>
			</div>
		</div>
	</div>
@stop

@section('js')
@stop
