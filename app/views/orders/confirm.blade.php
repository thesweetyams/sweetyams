@extends('master')

@section('content')
<h1>hello</h1>
	<p>You're total: ${{{$total}}}</p>
	@foreach($orderItems as $item)
		<h5>{{{$item->menuItem->name}}}</h5>
			{{ Form::open(['method' => 'DELETE', 'action' => ['OrdersController@destroy', $item->id]]) }}
				{{ Form::submit('Delete Item', ['class' => 'btn btn-danger']) }}
			{{ Form::close() }}
	@endforeach
		<a href="{{{action('OrdersController@create', $orderId)}}}">Add More to Order</a>
		<a href="{{{action("OrdersController@confirmOrder")}}}">Checkout</a>
@stop