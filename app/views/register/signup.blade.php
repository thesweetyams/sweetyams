@extends ('.master')

@section ('content')
 
  <div class="container">
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif
  
    {{Form::open(['action' => 'UsersController@store', 'method' => 'post'])}}
				<div class="row">
						@foreach($loginInfo as $info)
								<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
												{{ Form::label($info[0], $info[1]) }}
												{{ Form::text($info[0], null, [     'class'=>"form-control",'placeholder' => $info[1]]) }}
												@if ($errors->has($info[0]))
														{{ $errors->first($info[0], '<span class="help-block errorsColor textSize">:message</span>') }}
												@endif
										</div>
								</div>
						@endforeach
				{{ Form::submit()	}}
        {{ Form::close() }}
      </div>
    </div> <!-- /container -->
@stop
