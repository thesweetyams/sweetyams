@extends('master')

@section('content')

@foreach($menu as $dish)
    <h1>{{{$dish->name}}}</h1>
    <p>
        {{{$dish->description}}}
    </p>
    <img src="{{{$dish->image}}}" alt="" />
@endforeach
{{$menu->links()}}
@stop
