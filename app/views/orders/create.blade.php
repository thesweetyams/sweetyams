@extends('master')

@section('css')
	<link rel="stylesheet" href="/css/order.css">
@stop

@section('content')
	
	<div class="orderPageContainer">
	
		<!-- First Column -->
		<div class="menuItemsSidebar column">
			<h2 class="menuNameHeader">Menu Items</h2>
			@foreach($menuCategory as $category)
				<a href="#{{{$category->id}}}"><h5 class="menuName">{{{$category->name}}}</h5></a>
			@endforeach
		</div>

		<!-- Second Column -->
		<div class="itemsContainer column">
			@foreach($menuCategory as $category)
				<!-- Menu Section Title -->
				<h2 class="menuCategory">{{{$category->name}}}</h2>
					@foreach($menuItems as $item)
						@if($category->id == $item->menu_id)
							{{ Form::open(['action' => 'OrdersController@store', 'method' => 'post', 'class' => 'menuItemForm']) }}
								<!-- Single Menu Item Name -->
								<span>{{{$item->name}}}</span>
								<!-- The Price of One Menu Item -->
								<span>${{{$item->price()}}}</span>
								<!-- Mushroom Burger AddOns -->
								@if($category->name == 'Organic Mushroom Burger')
									<div class="mushroomAddOns">
										<p>{{{$item->name}}}</p>
										@foreach($addOns as $addOn)
											<p>{{{$addOn->description}}}</p>
											<p>{{{$addOn->price()}}}</p>
											{{Form::checkbox('add_on_id[]', $addOn->id, null, ['class' => 'checkbox'])}}
										@endforeach
									</div>
								@endif										
								
								<!-- Each Menu Items Button and Hidden Id -->
								{{ Form::hidden('item_id', $item->id, ['class' => 'item_id'])}}
								{{ Form::submit('Add to Order', ['class' => 'addItemButton']) }}

							{{ Form::close() }}
						@endif  <!-- category check if check -->
					@endforeach  <!-- .menuItems as item -->
				@endforeach  <!-- .menuCategory as category -->
			<a href="{{{action("OrdersController@confirmOrder")}}}"class="confirmOrder"><button class="confirmOrder">Confirm Order</button></a>
		</div>  <!-- .itemsContainer -->

		<!-- Third Column -->
		<!-- Order Display -->
		<div id="ajaxContainer" class="column">
			<h6 class="currentOrder">Current Order Items:</h6>
				<ul id="orders"></ul>
		</div> <!-- #ajaxContainer -->
</div> <!-- .ordersPageContainer -->
@stop


@section('js')
	<script src="/js/main.js"></script>
	<script src="/js/ajax.js"></script>
 @stop
