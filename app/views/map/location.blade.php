@extends('.master')
@section('content')
    <h1 class="flex__title">Location</h1>
    <br>
    <h3 class="flex__text">218 N Cherry, San Antonio, TX 78202</h3>
    <div id="map-canvas"></div>
    <input id="addressForm" type="text" name="name" value="" placeholder="Enter address"></input>
    <button id="addressButton" type="submit" name="button">Submit</button>
    <h1 class="flex__title">Hours</h1>
    <br>
    <h3 class="flex__text">Monday-Friday: 11am to 7pm</h3>
    <h3 class="flex__text">Saturday: 12pm to 7pm</h3>
    <br>
    <h1 class="flex__title">Contact Info</h1>
    <br>
    <h3 class="flex__text">210-229-9267</h3>
    <h3 class="flex__text">thesweetyam@gmail.com</h3>
    <div class="flex flex__fields">
      {{Form::open()}}
      <fieldset class="flex__form">
        {{Form::label('name', 'Name', ['class' => 'flex__form'])}}
        {{form::text('name', null, ['class' => 'flex__form'])}}
      </fieldset>
      <fieldset class="flex__form">
        {{Form::label('email', 'Email', ['class' => 'flex__form'])}}
        {{Form::text('email', null, ['class' => 'flex__form'])}}
      </fieldset>
      <fieldset class="flex__form">
        {{Form::label('phone', 'Phone', ['class' => 'flex__form'])}}
        {{Form::text('phone',null, ['class' => 'flex__form'])}}
      </fieldset>
      <fieldset class="flex__form">
        {{Form::label('message', 'Message', ['class' => 'flex__form'])}}
        {{Form::textarea('message',null, ['class' => 'flex__form', 'id' => 'flex__form--text'])}}
      </fieldset>
      {{Form::close()}}
      <hr>
    </div>
    <h3 class="flex__text">Send us a message and we'll get back to you as soon as we can!</h3>
    <br>
@endsection

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key={{{$_ENV['GOOGLE_KEY']}}}"></script>
    <script src="/js/googleapi.js"></script>
@endsection
