@extends('master')


@section('content')

	@foreach($menuItems as $item)
		<div class="item">
			<h3 class="item__title">{{{$item->name}}}</h3>
			<p class="item__description">{{{$item->description}}}</p>
			<h3 class="item__price">${{{number_format((float)($item->price / 100), 2, '.', '')}}}</h3>
			<img src="{{{$item->image}}}" alt="" class="item__image"/>
		</div>
	@endforeach
@stop
