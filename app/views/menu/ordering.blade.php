@extends('master')


@section('content')
  {{Form::open(['id' => 'billing-form'])}}
   <div class="">
      <label>
          <span>Card Number:</span>
          <input type="text" data-stripe="number">
      </label>
  </div>

   <div class="">
      <label>
          <span>CVC:</span>
          <input type="text" data-stripe="cvc">
      </label>
   </div>
   <div class="">
     <label>
         <span>Expiration Date:</span>
         {{Form::selectMonth(null, null, ['data-stripe' => 'exp-month'])}}
         {{Form::selectYear(null, date('Y'), date('Y') + 20, null, ['data-stripe' => 'exp-year'])}}
     </label>
  </div>
  <div class="">
     <label>
         <span>Email:</span>
         <input type="email" id="email" name="email">
     </label>
  </div>

  <div class="">
      {{Form::submit('Buy Now')}}
  </div>
  <div class="payments-errors">
  </div>
   {{Form::close()}}
@stop

@section('js')
    <script src="https://js.stripe.com/v2/"></script>
    <script src="/js/billing.js"></script>

@endsection
