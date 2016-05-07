@extends('master')

@section('content')
	@if (Session::has('successMessage'))
	    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

  <p>You're total: $<span id='totalCost'> {{{$order->subtotal()}}}</span></p> 
	@foreach($order->orderItems as $orderItem)
		<h5>{{{$orderItem->menuItem->name}}}</h5>
		@foreach($orderItem->orderItemAddOns as $orderItemAddOn)
			<span>{{{$orderItemAddOn->addOn->price}}}</span>
		@endforeach
		{{ Form::open(['method' => 'DELETE', 'action' => ['OrdersController@destroy', $orderItem->id]]) }}
			{{ Form::submit('Delete Item', ['class' => 'btn btn-danger']) }}
		{{ Form::close() }}

	@endforeach
	<a href="{{{action("OrdersController@create")}}}" style="color:black;"><button>Edit Order</button></a>
	<a href="{{{action("OrdersController@payOrder")}}}" style="color:black;"><button>Checkout</button></a>
  {{Form::open(['action' => 'OrdersController@charge', 'id' => 'billing-form'])}}
	<script
  var $total = parseInt($('#totalCost').html());
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="pk_test_4T6h97uNSVAN155P37yKURj7"
		data-name="Sweetyams"
		data-description="Online Order"
		data-image="/img/navicons/sweetyams.png"
    data-locale="auto">
    {{Form::close()}}
	</script>
@stop
