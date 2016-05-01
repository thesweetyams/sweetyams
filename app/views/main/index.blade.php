@extends('master')

@section('content')

	@foreach($menuItems as $dish)

	    <h1>{{{$dish->name}}}</h1>
	    <p>
	        {{{$dish->description}}}
	    </p>
	    <img src="{{{$dish->image}}}" alt="" />

	@endforeach

	

@stop
