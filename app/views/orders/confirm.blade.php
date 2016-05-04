@extends('master')

@section('content')

	<p>You're total: ${{{$total}}}</p>

	<a href="{{{action('OrdersController@create', $orderId)}}}">Go Back To Order</a>
	<a href="{{{action("OrdersController@confirmOrder")}}}">Confirm Order</a>

@stop