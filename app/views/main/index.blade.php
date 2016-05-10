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

	<div class="flex">
		<h1 class="flex__title" id="what">What is Sweet Yams?</h1>
		<p class="flex__text" id="what__text">
			Sweet Yams, located on the East Side of SA in (East Point). Our mission is to bring delicious, organic, healthy food and make it affordable and accessible to everyone. We're on a mission to heal the world through food; nurturing your mind, body, and soul with Organic local & Organic nationwide ingredients. We offer an all organic juice program, by focusing on consumption of nutrients by way of organic juices. Sweet Yams also provides the community with an organic food program. Fresh prepared meals that you choose off the menu, packaged and ready for you to warm and eat at your convenience.
			We keep it simple, fresh and full of love! Eat Better, Feel Better, Live Better!
		</p>
	</div>

	<div class="flex">
		<h1 class="flex__title" id="offer">What We Offer</h1>
		<p class="flex__text" id="offer__text">
			We have a menu that is vegetarian, vegan, and gluten sensitive friendly with an organic, southern style. We have Organic Food and Juice Programs to help you eat and live better. We also have an online ordering system so you can order Sweet Yams To Go or for Delivery!
		</p>
	</div>

@stop

@section('js')
@stop
