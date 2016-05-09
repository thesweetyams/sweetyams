@extends('master')

@section('css')

  @section('content')
    <div class="flex">
      <h1 class="flex__title">Catering</h1>
    </div>

    <div class="flex">
      <img class="flex__cater" id="flex__cater--left" src="/img/pictures/cater.jpeg" alt="">
      <img class="flex__cater" id="flex__cater--right" src="/img/pictures/cater4.jpeg" alt="">
    </div>

    <hr>

    <div class="flex">
      <h1 class="flex__title">We Cater Events!</h1>
      <p class="flex__text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <br><br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <br><br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div class="flex flex__contact">
      <h1 class="flex__title">Contact Us</h1>
      <p class="flex__text">
        Talk to us about catering for your next event!
      </p>
    </div>

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
      {{Form::close()}}
      <hr>
    </div>
  @stop
