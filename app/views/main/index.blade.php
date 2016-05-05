@extends('master')

@section('content')
	@foreach($menuItems as $dish)

	    <h1>{{{$dish->name}}}</h1>
	    <p>
	        {{{$dish->description}}}
	    </p>
	    <img class="index-image" src="{{{$dish->image}}}" alt="" />

	@endforeach



@stop
