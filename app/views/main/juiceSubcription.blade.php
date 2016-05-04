@extends('master')

@section('css')
    <style media="screen">
    body {


/* Header Image Background - Change the URL below to your image path (example: ../images/background.jpg) */

.business-header {
height: 400px;
background: url('http://placehold.it/1920x400') center center no-repeat scroll;
-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
-o-background-size: cover;
}

/* Customize the text color and shadow color and to optimize text legibility. */

.tagline {
text-shadow: 0 0 10px #000;
color: #fff;
}

.img-center {
margin: 0 auto;
}

    </style>

@section('content')
    <div class="col-md-6 portfolio-item">
                   <a href="#">
                       <img class="img-responsive" src="/img/menuImages/shake1.jpg" alt="">
                   </a>
   </div>
   <div class="col-md-6 portfolio-item">
               <a href="#">
                   <img class="img-responsive" src="/img/menuImages/shake1.jpg" alt="">
               </a>
           </div>

    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Juice Subscription</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>About our juice! </h2>
                <p>
                    We focus on consumption of nutrients by way of organic juices. After much research and amazing results, we try and keep it very simple.
                </p>
                <p>
                    The juices work! I'm becoming quickly convinced that no disease can live in a body full of high speed molecules designed to remind the body of its actual DNA. Its like replacing your insides with new ones.
                    Minimizing or eliminating meat allows the body to perform its healing functions with less complication caused by extended digestion.
                    Decreasing the digestion process is the secret healer.
                </p>
                <p>
                    We provide the juice and the method as well as consultation on what to eat and most
                    importantly when to eat. For some it does take discipline and for other its very easy but, it works for all.

                    We truly believe that this is the bases for the bodies healing and rejuvenation properties to activate and clear the body of dangerous
                    poisons that lead to disease and other harmful effects.
                </p>
            </div>
            <div class="col-sm-4">
                <h3>Contact us</h3>
                <hr>
                {{Form::open()}}
                <fieldset class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{form::text('name', null, ['class' => 'form-control'])}}
                    </fieldset>
                <fieldset class="form-group">
                    {{Form::label('email', 'Email')}}
                    {{Form::text('email', null, ['class' => 'form-control'])}}
                </fieldset>
                <fieldset class="form-group">
                    {{Form::label('phone', 'Phone')}}
                    {{Form::text('phone',null, ['class' => 'form-control'])}}
                </fieldset>
                {{Form::close()}}
            </div>
        </div>

        <hr>
@stop
