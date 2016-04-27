@extends('.master')

@section('content')
    {{Form::model($dish, ['action'=>['AdminController@update', $dish->id], 'method' => 'put', 'files' => true])}}
        {{ Form::label('name', 'Name') }}

        {{ Form::text('name', null, [ 'class'=>"form-control text-center"]) }}
        @if ($errors->has('name'))
            {{ $errors->first('name', '<span class="help-block errorsColor">:message</span>') }}
        @endif

        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <img src="{{$dish->image}}" alt="" />
            {{ Form::label('image', 'Image File:') }}
            {{ Form::file('image', null, ['class' => 'form-control']) }}
            <small class="text-danger">{{ $errors->first('image') }}</small>
        </div>
        {{ Form::label('description', 'Discription') }}
        {{ Form::textarea('description', null, [ 'class'=>"form-control", 'rows'=>"5"])}}
        @if ($errors->has('description'))
            {{ $errors->first('description', '<span class="help-block errorsColor">:message</span>') }}
        @endif

        {{ Form::label('price', 'Price') }}
        {{ Form::text('price', null, [ 'class'=>"form-control", 'rows'=>"5"])}}
        @if ($errors->has('price'))
            {{ $errors->first('price', '<span class="help-block errorsColor">:message</span>') }}
        @endif

        <button type="submit" name="button">Save</button>
    {{ Form::close() }}
@endsection
