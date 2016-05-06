@extends('master')

@section('css')
	<link rel="stylesheet" href="/css/temporary.css">
@stop

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-2">
		@foreach($menuCategory as $category)
			<!-- Menu Section Title -->
			<h2>{{{$category->name}}}</h2> 
				@foreach($menuItems as $item)
					@if($category->id == $item->menu_id)
						{{ Form::open(['action' => 'OrdersController@store', 'method' => 'post', 'style' => 'border: 1px solid black']) }}
							<div class="form-group">
								<!-- Single Menu Item Name -->
								<span>{{{$item->name}}}</span>
								<!-- The Price of One Menu Item --> 
								<span>{{{$item->price}}}</span>  
								
								<!-- Mushroom Burger AddOns -->
								@if($category->name == 'Organic Mushroom Burger') 
									@foreach($addOns as $addOn)
										<span>{{{$addOn->description}}}</span>
										<span>{{{$addOn->price}}}</span>
										{{Form::checkbox('add_on_id[]', $addOn->id, null, ['class' => 'checkbox'])}} 
									@endforeach
								@endif
								
								<!-- Each Menu Items Button and Hidden Id -->
								{{ Form::hidden('item_id', $item->id, ['class' => 'item_id'])}} 
								{{ Form::button('Add to Order', ['class' => 'btn btn-info pull-right','class' => 'ajaxBuildButton', 'style' => 'display: inline-block;']) }}

							</div> <!-- .form-group -->
						{{ Form::close() }}
					@endif  <!-- category check if check -->
				@endforeach  <!-- .menuItems as item -->
		@endforeach  <!-- .menuCategory as category -->
	<a href="{{{action("OrdersController@confirmOrder")}}}"class="confirmOrder"><button class="confirmOrder">Confirm Order</button></a>
</div>
	<div class="col-md-3" id="ajaxContainer">
		<p>Current Order Items:</p>
			<ul id="orders"></ul>
	</div> <!-- #ajaxContainer -->

</div> <!-- .row -->
@stop		


@section('js')
	<script src="/js/ajax.js"></script>
 @stop