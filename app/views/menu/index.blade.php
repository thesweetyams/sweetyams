@extends('master')


@section('content')
<div class="flex flex__order">
	@foreach($menuItems as $item)
		<div class="item">
			<h3 class="flex__title">{{{$item->name}}}</h3>
			<p class="flex__description">{{{$item->description}}}</p>
			<h6 class="flex__text flex__price">${{{number_format((float)($item->price / 100), 2, '.', '')}}}</h6>
		</div>
	@endforeach
</div>
@stop
