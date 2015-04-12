@extends('layouts.main')

@section('logo')
<a class="navbar-brand" href="homes" style="margin-left:-20px">{{ HTML::image('images/logo.png') }}</a>
@stop

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
      #distance {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #distance:focus {
        border-color: #4d90fe;
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
        .controls {
            margin-top: 16px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }
      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
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
    <div id="yasir">
    {{ Form::select('status', ['0' => 'Show Mosque Path', 
              '1' => 'Log Prayer in Mosque', 
              ], 0,['class' => 'form-control', 'id' => 'option']) }}
    </div>
    <div id="inputfield"> </div>
    
    <div id="directions-panel"></div>
    <div id="map-canvas"></div>
    


@stop


@section('jslinks')

    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <script type="text/javascript">
    alert();
  
                var directionsDisplay;
                var directionsService = new google.maps.DirectionsService();
var map;
var infowindow;
var lati;
var longi;
var range;


function initialize(lati,longi,i) {

      if(!navigator.geolocation) return;
      
      navigator.geolocation.getCurrentPosition(function(pos){
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(pos.coords.latitude,pos.coords.longitude);
/*        lati = pos.coords.latitude;
        longi = pos.coords.longitude;*/
   $("#yasir").append("<div id='control'> </div>");      
   $("#inputfield").append('<input id="pac-input" class="controls" type="text" placeholder="Search Box">');      
 if(i!==1){
          lati = pos.coords.latitude;
        longi = pos.coords.longitude;
      }
  else{
    lati=lati;
    longi=longi;
     }
  



  var pyrmont = new google.maps.LatLng(lati, longi);
  
            directionsDisplay = new google.maps.DirectionsRenderer(); 
            var mapOptions = {
            zoom: 7,
            center: new google.maps.LatLng(lati, longi)
                            };//

  var markers = [];
  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: pyrmont,
    zoom: 15,
    mapOptions 
  });
  
            directionsDisplay.setMap(map);   
            directionsDisplay.setPanel(document.getElementById('directions-panel'));
            var control = document.getElementById('control');
            
            control.style.display = 'block';
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);//
            
    // Create the search box and link it to the UI element.
  var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));

  // [START region_getplaces]
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });
      
                       lati =  place.geometry.location.lat();
                     longi = place.geometry.location.lng();
                     var i = 1;
                     document.getElementById('directions-panel').innerHTML='';
                     //alert(lati);
         google.maps.event.addDomListener(initialize(lati,longi,i));
     // markers.push(marker);

     // bounds.extend(place.geometry.location);
    }

    //map.fitBounds(bounds);
  });
  // [END region_getplaces]

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });
    
    
  var request = {
    location: pyrmont,
    radius: 1000,
    types: ['mosque']
  };
  infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
});


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
}   


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
    var value = document.getElementById("option").value
    if(value == 0){
    var name =infowindow.setContent(place.name);
    infowindow.open(map, this);
    
    calcRoute(this.position);
    document.getElementById("demo").innerHTML =  place.name;
    }
    else{
      alert();
    }
});

}





google.maps.event.addDomListener(window, 'load', initialize);



    </script>
    <!--text field validation code-->
         


@stop