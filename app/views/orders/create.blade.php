@extends('master')

@section('content')

<div class="col-md-6 col-md-offset-2" style="margin-top: 50px">
		@foreach($menuCategory as $category)
			<h2 style="text-decoration: underline;">{{{$category->name}}}</h2> <!-- Menu Section Title -->
				@foreach($menuItems as $item)
					@if($category->id == $item->menu_id)
						{{ Form::open(['action' => 'OrdersController@store', 'method' => 'post', 'style' => 'border: 1px solid black']) }}
							<div class="form-group">
								<p>{{{$item->name}}}</p>
								<p>{{{$item->price}}}</p>
								{{ Form::hidden('item_id', $item->id)}} 
								{{ Form::submit($item->id, ['class' => 'btn btn-info pull-right', 'style' => 'display: inline-block;']) }}
							</div> <!-- .form-group -->
						{{ Form::close() }}
					@endif  <!-- category check if check -->
				@endforeach  <!-- .menuItems as item -->
		@endforeach  <!-- .menuCategory as category -->
	<a href="{{{action("OrdersController@confirmOrder")}}}">Confirm Order</a>
</div>

		
@stop