@extends('master')

@section('css')

  @section('content')
    <div class="flex">
      <h1 class="flex__title">Juice Healing Program</h1>
    </div>

    <div class="flex">
      <img class="flex__juice" id="flex__juice--left" src="/img/pictures/juice.jpeg" alt="">
      <img class="flex__juice" id="flex__juice--right" src="/img/pictures/juice2.jpeg" alt="">
    </div>

    <hr>

    <div class="flex">
      <h1 class="flex__title">About our juice!</h1>
      <p class="flex__text">
        Our organic juice program has been very successful in helping our clients rebuild and rejunenate their bodies; this allows the natural healing process to take place.
        <br><br>
        We feel that it is by far the most effective healing aid on Earth. Weight loss, diabetes, high blood pressure, and many of the effects of most cancers are minimized or eliminated. It's very simple and it takes about 30-60 days for the body to acclimate and start the process of healing and abundant nutrient rejuvenation.. We believe in this program and its results. We extend our full money back guarantee to any that are not satisfied with the results of this program.
      </p>
        <br><br>
        <h3>20-Day($15 a day) &nbsp &nbsp 30-Day($12 a day)</h3>
        <br><br>
      <p class="flex__text">
        This program would cost $40-60 a day at most juice places. "The body is the healer, the juice is the aid". "The juices work!" All formulas are made from organic farm fresh vegetables including: carrots, beets, and chard, kales a variety of lettuce, greens, cucumbers and other medicinal living veggies. The best health and fitness program in the nation 100% effective or 100% money back guarentee. For those losing weight, we regularly see a loss of 7-12lbs. a week. The nutrient packed juices increase your energy, clarity and devotion to health. The key to success is commitment and consistency.
      </p>
    </div>

    <div class="flex">
      <h1 class="flex__title">Organic Food Program</h1>
    </div>

    <div class="flex">
      <img class="flex__food" id="flex__food--left" src="/img/pictures/salad.jpeg" alt="">
      <img class="flex__food" id="flex__food--right" src="/img/pictures/lemonchicken.jpeg" alt="">
    </div>

    <hr>

    <div class="flex">
      <h1 class="flex__title">No time to cook?</h1>
      <p class="flex__text">
        Let Sweet Yams take care of the food while you take care of yourself and the family. Just select your list of delicious choices from our menu nd we will package them for you to take home or to work and enjoy at your own convenience. All items are less than 500 calories. So enjoy our clean organic foods and eat what you want!
      </p>
        <br><br>
        <h3>Packages: (for 3 days)</h3>
        <br><br>
        <h3>3 meals or 6 meals</h3>
        <br><br>
        <h3>(Each meal costs $10.50, plus a $6 service fee per 3 meals [one-time fee]-reusable containers)</h3>
        <br><br>
      <p class="flex__text">
        Please order at least 24 hours prior to pick up/delivery of your food. Eating right and juicing regular can rid our body of dangerous toxins and regenerate your organs. Our food program is for health, pleasure, and convenience. The healthiest choice you can make in your life is the juice. Take your life back to youthful greatness.
      </p>
    </div>

    <div class="flex flex__contact">
      <h1 class="flex__title">Contact Us</h1>
      <p class="flex__text">
        Talk to us about starting a juice or organic food subscription and start living better!
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
