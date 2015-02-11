<script src="js/jquery_new.js" type="text/javascript"></script>

<script type="text/javascript">
	
	
  $('#next').click(function(){

        if(typeof(Storage) !== "undefined") {
        if (sessionStorage.clickcount) {
            sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
        } else {
            sessionStorage.clickcount = 1;
          }
        }
        
        
				
        $('#div').after('<div id="div1" class="item">  </div>');
        /*g=document.createElement('div');
        g.setAttribute("id", "Div1" , "class" , "item");
        $('#div').after('g');*/

         var data = {count: sessionStorage.clickcount};
         alert(sessionStorage.clickcount);
                var url = "prayers/show";
               ajaxHandle(url, data);
               
	});

    function ajaxHandle(url, data) {
                jQuery.ajax({
                    type: 'get',
                    url: url,
                    data: data,
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

        var d = new Date();
        var timezone = d.getTimezoneOffset()/-60;
       	
       	var data = {latitude: lati, longitude: longi, tzone:timezone, count: 0 };

       	
        var url = "prayers/show";
        ajaxHandle(url, data);
       	


   		}

   		function ajaxHandle(url, data) {
                jQuery.ajax({
                    type: 'get',
                    url: url,
                    data: data,
                    success: function(data) {
                    $('#div').html(data)
                    }
                   
                });


            }
   		


    	
	});




</script>