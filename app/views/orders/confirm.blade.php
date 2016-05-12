@extends('master')

@section('css')
<link rel="stylesheet" href="/css/confirm.css">

@section('content')
      <template id="alert-template">
      <div :class="alertClasses" v-show="show">
        <slot></slot>
      </div>
    </template>
      @if (Session::has('successMessage'))
          <div class="Alert Alert--Success">{{{ Session::get('successMessage') }}}</div>
      @endif
      @if (Session::has('errorMessage'))
          <div class="Alert Alert--Error">{{{ Session::get('errorMessage') }}}</div>
      @endif

        @foreach($order->orderItems as $orderItem)
            <div class="orderDiv">
                <p class="child">{{{$orderItem->menuItem->name}}}</p>
                    <span class="textRight child">${{{number_format((float)($orderItem->menuItem->price / 100), 2, '.', '')}}}</span>
                    {{ Form::open(['method' => 'DELETE', 'action' => ['OrdersController@destroy', $orderItem->id], 'class' => 'formRight']) }}
                        {{ Form::submit('Delete Item', ['class' => 'butn']) }}
                    {{ Form::close() }}

            <ul>
                @foreach($orderItem->orderItemAddOns as $orderItemAddOn)
                    <li>{{{$orderItemAddOn->addOn->description}}}</li>
                    <span>{{{$orderItemAddOn->addOn->price}}}</span>
                @endforeach
            </ul>

        </div> <!-- .orderDiv -->
        <hr>

        @endforeach
  <a href="{{{action("OrdersController@create")}}}" style="color:black;"><button>Edit Order</button></a>
  <p>Your total: $<span id='totalCost'> {{{$order->subtotal()}}}</span></p>
    {{Form::radio('orderType', 'carryout', null, ['class' => 'checkbox'])}}
    <span>Carry Out</span>  {{Form::open(['action' => 'OrdersController@charge', 'id' => 'billing-form'])}}

    @if ($order->subtotal() >= 15)
      {{Form::radio('orderType', 'delivery', null, ['class' => 'checkbox'])}}
      <span>Delivery</span>
    @else
      <p>For delivery price needs to be over $15</p>
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
    {{Form::submit('Pay with cash',['id' => 'submit'])}}
  {{Form::close()}}
@stop

@section('js')

<script src="/js/main.js"></script>
<script>
$('.stripe-button-el').attr('disabled', true);
$('#submit').attr('disabled', true);
$('.checkbox').on('click', function(){
  $('.stripe-button-el').attr('disabled', false);
  $('#submit').attr('disabled', false);
});
if($('.stripe-button-el').is('disabled')
   || $('#submit').attr('disabled')) {
  $('.stripe-button-el').on('click', function() {
    alert('Delivery type needs to be set');
  });
}
</script>
@stop
