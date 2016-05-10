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
    <h2>{{{$orderItem->menuItem->name}}}
    <span>${{{number_format((float)($orderItem->menuItem->price / 100), 2, '.', '')}}}</span></h2>
    <ul>
    @foreach($orderItem->orderItemAddOns as $orderItemAddOn)
      <li>{{{$orderItemAddOn->addOn->description}}}</li>
      <span>{{{$orderItemAddOn->addOn->price}}}</span>
    @endforeach
    </ul>
    <hr>

    {{ Form::open(['method' => 'DELETE', 'action' => ['OrdersController@destroy', $orderItem->id]]) }}
      {{ Form::submit('Delete Item', ['class' => 'btn btn-danger']) }}
    {{ Form::close() }}
  @endforeach
  <a href="{{{action("OrdersController@create")}}}" style="color:black;"><button>Edit Order</button></a>
  {{Form::open(['action' => 'OrdersController@charge', 'id' => 'billing-form'])}}
    {{Form::radio('Carry Out', 'carry out', null, ['class' => 'checkbox'])}}
    <span>Carry Out</span>
    @if ($order->subtotal()> 15)                                            
      {{Form::radio('Carry Out', 'carry out', null, ['class' => 'checkbox'])}}
      <span>Delivery</span>
    @else
      <span>For delivery price needs to be over $15</span>
    @endif
    <script
    var $total = parseInt($('#totalCost').html());
      src="https://checkout.stripe.com/checkout.js" class="stripe-button"
      data-key="pk_test_4T6h97uNSVAN155P37yKURj7"
      data-name="Sweetyams"
      data-description="Online Order"
      data-image="/img/navicons/sweetyams.png"
      data-locale="auto">
    </script>
  {{Form::close()}}
  {{Form::open(['action' => 'OrdersController@payWithCash'])}}
    {{Form::submit('Pay with cash')}}
  {{Form::close()}}
@stop

@section('js')

<script src="/js/main.js"></script>

@stop
