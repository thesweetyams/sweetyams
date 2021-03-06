@extends('master')

@section('css')
	<link rel="stylesheet" href="/css/order.css" media="screen" title="no title" charset="utf-8">
@stop
@section('content')

<div class="flex flex__create">
	<div class="orderPageContainer">
	  @if (Session::has('successMessage'))
	      <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	  @endif
	  @if (Session::has('errorMessage'))
	      <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	  @endif
		<!-- First Column -->
		<div class="menuItemsSidebar column">
			<h2 class="menuNameHeader" id="top">Menu Items</h2>
			@foreach($menuCategory as $category)
				<a href="#{{{$category->id}}}" class="menuName"><h5>{{{$category->name}}}</h5></a>
			@endforeach
		</div>

		<!-- Second Column -->
		<div class="itemsContainer column">
			@foreach($menuCategory as $category)
				<!-- Menu Section Title -->

				<a href="#top" id="{{{$category->id}}}"><h2 class="menuCategory">{{{$category->name}}}</h2></a>
					@foreach($menuItems as $item)
						@if($category->id == $item->menu_id)
							{{ Form::open(['action' => 'OrdersController@store', 'method' => 'post', 'class' => 'menuItemForm']) }}
								<!-- Single Menu Item Name -->
								<!-- The Price of One Menu Item -->
								<p>{{{$item->name}}} :<span>${{{$item->price()}}}</span></p>

								<!-- Mushroom Burger AddOns -->
								@if($category->name == 'Organic Mushroom Burger')
									<div class="mushroomAddOns">
										@foreach($addOns as $addOn)
											<p>{{{$addOn->description}}}</p>
											<p>{{{$addOn->price()}}}</p>
											{{Form::checkbox('add_on_id[]', $addOn->id, null, ['class' => 'checkbox'])}}
										@endforeach
									</div>
								@endif

								<!-- Each Menu Items Button and Hidden Id -->
								{{ Form::hidden('item_id', $item->id, ['class' => 'item_id'])}}
								{{ Form::submit('Add', ['class' => 'addItemButton butn']) }}
								
							{{ Form::close() }}
						@endif  <!-- category check if check -->
					@endforeach  <!-- .menuItems as item -->
				@endforeach  <!-- .menuCategory as category -->
		</div>  <!-- .itemsContainer -->

			<!-- Order Display -->

	</div> <!-- .ordersPageContainer -->

			<div id="ajaxContainer">
				<h1 class="currentOrderHeader">Current Order</h1>
				<a href="{{{action("OrdersController@confirmOrder")}}}"class="confirmOrder"><button id="confirmButton" class="confirmOrder butn">Confirm Order</button></a>
			</div> <!-- #ajaxContainer -->
</div>
@stop


@section('js')
	<script src="/js/main.js"></script>
	<script src="/js/ajax.js"></script>
 @stop
