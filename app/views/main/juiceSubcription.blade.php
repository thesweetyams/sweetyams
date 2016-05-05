@extends('master')

@section('css')

  @section('content')
    <div class="flex">
      <h1 class="flex__title">Juice Subscription</h1>
    </div>

    <div class="flex">
      <img class="flex__juice" id="flex__juice--left" src="/img/pictures/juice.jpeg" alt="">
      <img class="flex__juice" id="flex__juice--right" src="/img/pictures/juice2.jpeg" alt="">
    </div>

    <hr>

    <div class="flex">
      <h1 class="flex__title">About our juice!</h1>
      <p class="flex__text">
        We focus on consumption of nutrients by way of organic juices. After much research and amazing results, we try and keep it very simple.
        <br><br>
        The juices work! I'm becoming quickly convinced that no disease can live in a body full of high speed molecules designed to remind the body of its actual DNA. Its like replacing your insides with new ones.
        Minimizing or eliminating meat allows the body to perform its healing functions with less complication caused by extended digestion.
        Decreasing the digestion process is the secret healer.
        <br><br>
        We provide the juice and the method as well as consultation on what to eat and most
        importantly when to eat. For some it does take discipline and for other its very easy, but it works for all. We truly believe that this is the bases for the bodies healing and rejuvenation properties to activate and clear the body of dangerous
        poisons that lead to disease and other harmful effects.
      </p>
    </div>

    <div class="flex flex__contact">
      <h1 class="flex__title">Contact us</h1>
      <p class="flex__text">
        Talk to us about starting a juice subscription and start living better!
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
