@extends('.master')
@section('css')
<style type="text/css">
     #map-canvas {
         width: 770px;
         height: 481px;
     }
 </style>
@endsection
@section('content')
    <div id="map-canvas"></div>
    <input id="addressForm" type="text" name="name" value="" placeholder="Enter address">
        </input>
            <button id="addressButton" type="submit" name="button">Submit</button>

@endsection

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key={{{$_ENV['GOOGLE_KEY']}}}"></script>
    <script src="/js/googleapi.js"></script>
@endsection
