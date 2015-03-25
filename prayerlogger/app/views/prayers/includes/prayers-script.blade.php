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

        /*g=document.createElement('div');
        g.setAttribute("id", "Div1" , "class" , "item");
        $('#div').after('g');*/
        
     
        var counter = sessionStorage.clickcount;
        

        var preid = counter-1;
        prediv= '#div'+preid;
       
        $(prediv).after('<div id="div'+counter+'" class="item">  </div>');
        
         var id='#div'+counter+'';
         var data = {count: sessionStorage.clickcount, divid : id};
      
                var url = "prayers/show";
               ajaxHandle(url, data);
               
  });

    function ajaxHandle(url, data) {
                jQuery.ajax({
                    type: 'get',
                    url: url,
                    data: data,
                    success: function(response) {
                      var id= data['divid'];
                      
                      $(id).html(response)
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
        /*------------------show location------------------------*/





        /*--------------------end end show location----------------------*/




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
                    $('#div0').html(data)
                    }
                   
                });


            }
      


      
  });




</script>

