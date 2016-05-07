@if($order)
@foreach($order as $key => $value) 
  <?php $finalArray[] = $order[$key] . ' ' . '$' . $price[$key] ?> 
@endforeach
@foreach($finalArray as $item) 
	<p>{{{$item}}}</p>
@endforeach

@endif
