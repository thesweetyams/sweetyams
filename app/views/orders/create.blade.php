@extends('master')

@section('content')


{{ Form::open(['action' => 'OrdersController@store', 'method' => 'post']) }}
	@foreach($menuCategory as $category)
		<h2 style="text-decoration: underline;">{{{$category->name}}}</h2> <!-- Menu Section Title -->
			@foreach($menuItems as $item)
				@if($category->id == $item->menu_id)
					<p>{{{$item->name}}}</p>
					<p>{{{$item->price}}}</p>
					{{ Form::submit('Add Item', ['class' => 'btn btn-info pull-right', 'value' => {{{$item->price}}}]) }}
				@endif
			@endforeach
	@endforeach
{{ Form::close() }}


		
	

@stop