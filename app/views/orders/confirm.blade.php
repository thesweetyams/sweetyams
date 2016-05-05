@extends('master')

@section('content')
	@if (Session::has('successMessage'))
	    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif



	<p>You're total: ${{{$total}}}</p>
	@foreach($orderItems as $orderItem)
		<!-- $item  -->
		<h5>{{{$orderItem->menuItem->name}}}</h5>

		{{ Form::open(['method' => 'DELETE', 'action' => ['OrdersController@destroy', $orderItem->id]]) }}
			{{ Form::submit('Delete Item', ['class' => 'btn btn-danger']) }}
		{{ Form::close() }}
	@endforeach
	<a href="{{{action("OrdersController@payOrder")}}}">Checkout</a>
@stop