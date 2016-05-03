@extends('master')

@section('content')

	<div class="orderConfirm">
		<ul class="confirmOrderUL">
			@foreach($orderItems as $item)
				<li>$item</li>
			@endforeach
		</ul> <!-- .confirmOrderUl -->
	</div> <!-- .orderConfirm -->




@stop