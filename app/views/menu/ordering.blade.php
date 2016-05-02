@extends('master')


@section('content')

{{ Form::open(array('action' => 'OrdersController@store', 'method' => 'POST'))}}
@foreach($menu as $dish) 

@endforeach
	


@stop
