<script src="js/jquery_new.js" type="text/javascript"></script>

    <script type="text/javascript">


       $(document).ready(function() {
     

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

            var d = new Date();
            var timezone = d.getTimezoneOffset()/-60;
            var hour = d.getHours();
            var minutes = d.getMinutes();


            document.getElementById("lati").value = lati;
            document.getElementById("longi").value = longi;
            document.getElementById("zone").value = timezone;
            document.getElementById("hour").value = hour;
            document.getElementById("minutes").value = minutes;

         
		/*--------------------end end show location----------------------*/

          }


                 
      });


    </script>

    <script type="text/javascript">

    window.onload=function(){ 

        var x=1000;

        var auto_refresh = setInterval(function() { submitform(); }, x++);

        //Form submit function
        function submitform()
         {  
            if( validate() )//Calling validate function
            {  
               document.forms[0].submit();
            }
         }
         
        //To validate form fields before submission 
        function validate(){
            //Storing Field Values in variables

            var longi = document.getElementById("lati").value;

          
     
            //Conditions

            if(longi){
                return true;
            }


        } 
};



        </script>

        