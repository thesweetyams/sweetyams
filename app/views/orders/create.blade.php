@extends('master')

@section('content')


{{ Form::open(['action' => 'OrdersController@store', 'method' => 'post']) }}
	@foreach($ as $)
		
	@endforeach
{{ Form::close() }}


		
	




@stop