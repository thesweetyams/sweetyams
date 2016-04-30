@extends('master')


@section('content')

	@foreach($menuItems as $item)
		<p>{{{$item->name}}}</p>
		<p>{{{$item->price}}}</p>
	@endforeach

@stop
