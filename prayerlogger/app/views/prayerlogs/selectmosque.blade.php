


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

        </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <script>
var map;
var infowindow;
var street_number = "";
                var city = "";
                var sublocality  = "";
                var state = "";
                var country = "";


function initialize(lati, longi, i) {
	
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        }
        else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    
 // if (lati === undefined) lati = position.coords.latitude;
 // if (longi === undefined) longi = position.coords.longitude;
    
		function showPosition(position) {

		/*------------------show location------------------------*/

        // if(){
        // lati = position.coords.latitude;
        // longi = position.coords.longitude;
        
        // }



        
        if( i === undefined ){
		lati = position.coords.latitude;
		longi = position.coords.longitude;
        
        }else{ 
            lati = lati;
            longi = longi; 
        }

        geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(lati,longi);
                    geocoder.geocode({'latLng': latlng}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                //Check result 0
                var result = results[0];
                //look for locality tag and administrative_area_level_1
                
                
                
                for(var i=0, len=result.address_components.length; i<len; i++) {
                    var ac = result.address_components[i];
                    if(ac.types.indexOf("street_number") >= 0) street_number = ac.long_name;
                    if(ac.types.indexOf("locality") >= 0) city = ac.long_name;
                    if(ac.types.indexOf("sublocality") >= 0) sublocality = ac.long_name;
                    if(ac.types.indexOf("administrative_area_level_1") >= 0) state = ac.long_name;
                    if(ac.types.indexOf("political") >= 0) political  = ac.long_name;
                    if(ac.types.indexOf("country") >= 0) country  = ac.long_name;
                    
                    
                }

               /* //only report if we got Good Stuff
                if(city != '' && state != '') {
                    $("#result").html(street_number+", " +city+", "+sublocality + "," + state + "," +country);
                }*/
            } 
        });

       
var markers = [];

  var pyrmont = new google.maps.LatLng(lati, longi);
  //------------------------------
    var input = /** @type {HTMLInputElement} */(
                        document.getElementById('pac-input'));
  //-------------------------

  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: pyrmont,
    zoom: 15
  });
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                var searchBox = new google.maps.places.SearchBox(
                        /** @type {HTMLInputElement} */(input));
  var request = {
    location: pyrmont,
    radius: 1000,
    types: ['mosque']
  };
  infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
  google.maps.event.addListener(searchBox, 'places_changed', function () {
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
                    google.maps.event.addDomListener(initialize(lati,longi, i));

                       // markers.push(marker);

                        //bounds.extend(place.geometry.location);
                    }

                    //map.fitBounds(bounds);
                });
}
google.maps.event.addDomListener(window, 'load', initialize);
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
	});

google.maps.event.addListener(marker, 'click', function($id) {
    var name =infowindow.setContent(place.name);
    infowindow.open(map, this);
    var x = place.name;
    document.getElementById('mosque_name').value = x;
    document.getElementById('country').value = country;
    
     document.getElementById('state').value = state;
     document.getElementById('city').value = city;  
    document.getElementById('map-canvas').style.display='none';
    document.getElementById('edit-page').style.display='inline';

    //document.getElementById('map-canvas').style.display='inline';


    
   
    
    
    
});
}

google.maps.event.addDomListener(window, 'load', initialize);


    </script>
  </head>
  <body>
   <input hidden id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div  hidden id="map-canvas" name='map-canvas' ></div>
   <div id="result"></div>

  </body>
</html>

