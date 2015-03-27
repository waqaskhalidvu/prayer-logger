<!DOCTYPE html>
<html>
  <head>
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <script>
var map;
var infowindow;


function initialize() {
	if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		}
		else {
			x.innerHTML = "Geolocation is not supported by this browser.";
		}


		function showPosition(position) {
		/*------------------show location------------------------*/


		lati = position.coords.latitude;
		longi = position.coords.longitude;


  var pyrmont = new google.maps.LatLng(lati, longi);

  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: pyrmont,
    zoom: 15
  });

  var request = {
    location: pyrmont,
    radius: 1000,
    types: ['mosque']
  };
  infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
}

function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
    createMarker(results[i]);
			
	}
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

}

google.maps.event.addDomListener(window, 'load', initialize);


    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
	
  </body>
</html>