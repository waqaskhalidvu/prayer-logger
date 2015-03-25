@extends('layouts.main')

@section('csslinks')
	<style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
    </style>
    <style>
      #directions-panel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }

      #map-canvas {
        margin-right: 400px;
      }

      #control {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }

      @media print {
        #map-canvas {
          height: 500px;
          margin: 0;
        }

        #directions-panel {
          float: none;
          width: auto;
        }
      }
    </style>

@stop


@section('tablinks')

<li>{{ HTML::linkRoute('homes.index', 'Home') }}</li>
<li><a href="/locationfind">Prayer Book</a></li>
<li>{{ HTML::linkRoute('prayers.index', 'Prayer Timing') }}</li>
<li class="active">{{ HTML::linkRoute('mosques.index', 'Mosque Finding') }}</li>
<li>{{ HTML::linkRoute('qiblahdirections.index', 'Qiblah Direction') }}</li>
<li>{{ HTML::linkRoute('settings.index', 'Settings') }}</li>

@stop


@section('content')
	
	<div id="control">
		Enter distance in meters:
		
		<INPUT id="distance" onkeypress="return isNumberKey(event)" type="text" name="distance" maxlength="5" value="500">
      
		<button onClick="window.location.reload()">Enter</button>
	 
    </div>
    <div id="directions-panel"></div>
    <div id="map-canvas"></div>



@stop


@section('jslinks')
	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <script>
				var directionsDisplay;//
				var directionsService = new google.maps.DirectionsService();//
var map;
var infowindow;
var lati;
var longi;
var range;


function initialize() {
	function myfunction(){
	range = document.getElementById("distance").value;
	return range;
}

			
	
	if(!navigator.geolocation) return;
	  
	  navigator.geolocation.getCurrentPosition(function(pos){
		geocoder = new google.maps.Geocoder();
		var latlng = new google.maps.LatLng(pos.coords.latitude,pos.coords.longitude);
		lati = pos.coords.latitude;
		longi = pos.coords.longitude;
		




  var pyrmont = new google.maps.LatLng(lati, longi);
  
			directionsDisplay = new google.maps.DirectionsRenderer(); //
			var mapOptions = {//
			zoom: 7,
			center: new google.maps.LatLng(lati, longi)
							};//

  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: pyrmont,
    zoom: 15,
	mapOptions   //
  });
  
			directionsDisplay.setMap(map);   //
			directionsDisplay.setPanel(document.getElementById('directions-panel'));  //
			var control = document.getElementById('control');//
			control.style.display = 'block';//
			map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);//
	 
	
	
	
  var request = {
    location: pyrmont,
    radius: myfunction(),
    types: ['mosque']
  };
  infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
});
}

function calcRoute(end) {	
  
  
   var start = new google.maps.LatLng(lati, longi);
   
	var request = {
    origin: start,
    destination: end,
    travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}   //

function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
    createMarker(results[i]);
			
	}
  }
}

function createMarker(place) {
  var placeLoc = place.geometry.location;
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location
  });
	
	google.maps.event.addListener(marker, 'mouseover', function() {
    var name =infowindow.setContent(place.name);
    infowindow.open(map, this);
	
	
	document.getElementById("demo").innerHTML =  place.name;
	});	
  
  google.maps.event.addListener(marker, 'click', function() {
    var name =infowindow.setContent(place.name);
    infowindow.open(map, this);
	
	calcRoute(this.position);
	document.getElementById("demo").innerHTML =  place.name;
});

}


google.maps.event.addDomListener(window, 'load', initialize);


    </script>
	<!--text field validation code-->
		 <SCRIPT language=Javascript>
      
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      
   </SCRIPT>


@stop