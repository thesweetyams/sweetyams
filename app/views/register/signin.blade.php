@extends ('.master')

@section('content')
  <div class="container">
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif
  
    {{Form::open(['action' => 'UsersController@doLogin', 'method' => 'post'])}}
				<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
												{{ Form::label('email', 'Email') }}
												{{ Form::text('email', null, ['class'=>"form-control",'placeholder' => 'Email']) }}
												@if ($errors->has('email'))
														{{ $errors->first('email', '<span class="help-block errorsColor textSize">:message</span>') }}
												@endif
												{{ Form::label('password', 'Password') }}
												{{ Form::text('password', null, ['class'=>"form-control",'placeholder' => 'Password']) }}
												@if ($errors->has('email'))
														{{ $errors->first('email', '<span class="help-block errorsColor textSize">:message</span>') }}
												@endif
										</div>
								</div>
				{{ Form::submit()	}}
        {{ Form::close() }}
    </div> <!-- /container -->
@stop
