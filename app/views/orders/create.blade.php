@extends('master')

@section('content')

<h1>This shows the menu items </h1>
<h2>Chicken Dished</h2>

{{ Form::open(['' => '', '' => '']) }}
@foreach($menuItems as $chicken)
{{ Form::open(array('action' => 'OrdersController@store', 'method' => 'POST'))}}


@endforeach
{{ Form::close() }}

@stop