<!-- <script src="js/jquery_new.js" type="text/javascript"></script> -->

<script type="text/javascript">

  var next_clicks = 0;
  
  $('#next').click(function(){

        

        var preid = next_clicks-1;
        prediv= '#div'+preid;

        $(prediv).after('<div id="div'+next_clicks+'" class="item">  </div>');
        
         var id='#div'+next_clicks+'';
         var data = {next_count: next_clicks, divid : id};
      
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

        ajaxHandler(url, data);

        


      }

      function ajaxHandler(url, data) {
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

  var pre_clicks = 0;

   $('#prev').click(function(){


         var preid = pre_clicks-1;
         prediv= '#div-'+preid;
        if(pre_clicks == 1){
           prediv= '#div'+preid;
           }


         $(prediv).before('<div id="div-'+pre_clicks+'" class="item">  </div>');

          var id='#div-'+pre_clicks+'';
          var data = {pre_count: pre_clicks, divid : id};

                 var url = "prayers/show";
                ajaxHandle(url, data);

    });


</script>

