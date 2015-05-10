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
            var day =d.getDate();

            var month = d.getMonth()+1;
            var year = d.getFullYear();
            document.getElementById("day").value = day;
            document.getElementById("month").value = month;
            document.getElementById("year").value = year;
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

        

        var auto_refresh = setInterval(function() { submitform(); }, 1);

        //Form submit function
        function submitform()
         {  
            if( validate() )//Calling validate function
            {  
                clearInterval(auto_refresh);
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

        