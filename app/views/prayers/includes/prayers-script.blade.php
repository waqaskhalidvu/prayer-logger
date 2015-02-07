<script src="js/jquery_new.js" type="text/javascript"></script>

<script type="text/javascript">
	
	$('#next').click(function(){
				
         var data = {};
                var url = "prayers/show";
               ajaxHandler(url, data);
               
	});

	function ajaxHandler(url, data) {
		
            $.ajax({
	        type: "get",
	        url: url,
	        // data: {"deletefile": filename},
	        success: function(data) {
	        	$('#div1').html(data)
	        }
	    });
            }





	 $( document ).ready(function() {
	 	 if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        }
        else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }


        function showPosition(position) {
        lati = position.coords.latitude;
        longi = position.coords.longitude;
       	
       	var data = {latitude: lati, longitude: longi, name:'yasir' };

       	var url = "prayers/index";
       
       	ajaxHandle(url, data);
       	
        

   		}

   		function ajaxHandle(url, data) {
        alert(data['latitude']);
                jQuery.ajax({
                    type: 'GET',
                    url: url,
                    data: data,
                   
                });

            }
   		


    	
	});

 


</script>