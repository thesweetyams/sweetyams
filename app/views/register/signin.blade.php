@extends ('.master')

@section('css')
  <link rel="stylesheet" href="/css/signin.css">
@stop

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
            {{ Form::text('email', null, ['placeholder' => 'Email']) }}
            @if ($errors->has('email'))
              {{ $errors->first('email', '<span class="help-block errorsColor textSize">:message</span>') }}
            @endif
            {{ Form::label('password', 'Password') }}
            {{ Form::text('password', null, ['placeholder' => 'Password']) }}
            @if ($errors->has('email'))
              {{ $errors->first('email', '<span class="help-block errorsColor textSize">:message</span>') }}
            @endif
          </div>
        </div>
      {{ Form::submit()	}}
    {{ Form::close() }}
  <a href="{{{action("MainController@signup")}}}">Sign up</a>
</div> <!-- /container -->
@stop


