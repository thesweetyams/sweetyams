@extends('master')
@section('css')
<link rel="stylesheet" href="/css/temporary.css">
@stop
@section('content')
<div class="row">
<div class="col-md-6 col-md-offset-2">
		@foreach($menuCategory as $category)
			<h2 style="text-decoration: underline;">{{{$category->name}}}</h2> <!-- Menu Section Title -->
				@foreach($menuItems as $item)
					@if($category->id == $item->menu_id)
						{{ Form::open(['action' => 'OrdersController@store', 'method' => 'post', 'style' => 'border: 1px solid black']) }}
							<div class="form-group">
								<span>{{{$item->name}}}</span> <!-- Single Menu Item Name -->
								<span>{{{$item->price}}}</span>  <!-- The Price of One Menu Item -->

								@if($category->name == 'Organic Mushroom Burger') <!-- // Mushroom Burger AddOns -->
									@foreach($addOns as $addOn)
										<span>{{{$addOn->description}}}</span>
										<span>{{{$addOn->price}}}</span>
										{{Form::checkbox('add_on_id[]', $addOn->id, null, ['class' => 'checkbox'])}} 
									@endforeach
								@endif

								{{ Form::hidden('item_id', $item->id)}} 
								{{ Form::submit('Add to Order', ['class' => 'btn btn-info pull-right', 'style' => 'display: inline-block;']) }}
							</div> <!-- .form-group -->
						{{ Form::close() }}
					@endif  <!-- category check if check -->
				@endforeach  <!-- .menuItems as item -->
		@endforeach  <!-- .menuCategory as category -->
	
	<a href="{{{action("OrdersController@confirmOrder")}}}"class="confirmOrder"><button class="confirmOrder">Confirm Order</button></a>
</div>
<div class="col-md-3" id="ajaxContainer">
	<p>Current Order Items:</p>
</div> <!-- #ajaxContainer -->

</div> <!-- .row -->
		
@stop

@section('js')
<!-- 
// $(function (){
// 	var orders = $('#orders');
// 	$.ajax({
// 		type: 'get',
// 		url:  'orders/create',
// 		success: function(orders) {
// 			$.each(orders, function(i, order) {
// 				$orders.append('<li>Order Item: '+ order.name + '</li>');
// 			});
// 		}
// 	});
// }); */
 -->