@extends('layouts.main')

@section('csslinks')

    <style>
      #map-canvas {
      	margin-left: 25%;
      	margin-top: 2%;
        width: 50%;
	height: 600px;
	border-radius: 300px;
	
	-webkit-border-radius: 300px;
	-moz-border-radius: 300px;
	
		
      }
    </style>

@stop

@section('tablinks')

<li><a href="homes">Home</a></li>
<li><a href="/locationfind">Prayer Book</a></li>
<li><a href="prayers">Prayer Timing</a></li>
<li><a href="mosques">Mosque Finding</a></li>
<li class="active"><a href="qiblahdirections">Qiblah Direction</a></li>
<li><a href="settings">Settings</a></li>

@stop

@section('content')
    <div id="map-canvas" style="border-style: solid; border-color: white #3498db; border-width: 10px;">
		
	</div>

@stop


@section('jslinks')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
// This example adds an animated symbol to a polyline.

var line;

function initialize() {
	if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        }
        else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }


        function showPosition(position) {


        lati = position.coords.latitude;
        longi = position.coords.longitude;


  var mapOptions = {
    center: new google.maps.LatLng(lati, longi),
    zoom: 20,
	draggable: false,
	zoomControl: false,
	scrollwheel: false,
	disableDoubleClickZoom: false,
	
    mapTypeId: google.maps.MapTypeId.TERRAIN
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var lineCoordinates = [ 
  
    new google.maps.LatLng(lati, longi),
    new google.maps.LatLng(21.4225, 39.8262)
  ];
  

  // Define the symbol, using one of the predefined paths ('CIRCLE')
  // supplied by the Google Maps JavaScript API.
  var lineSymbol = {
    path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
    scale: 1,
    strokeColor: '#000'
  };

  // Create the polyline and add the symbol to it via the 'icons' property.
  line = new google.maps.Polyline({
    path: lineCoordinates,
    icons: [{
      icon: lineSymbol,
      offset: '100%'
    }],
    map: map
  });

  
}
}



google.maps.event.addDomListener(window, 'load', initialize);

    </script>
@stop