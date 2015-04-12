<?php
include 'includes/PrayTime.php';


	if(isset($_GET['count'])){
		$count = $_GET['count']*3;
	}
	else{
		$count = 0;
	}
	

  
for ($n = 0; $n < 3; $n++) { 



	echo '<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">';
 	echo '<div class="feature-wrap">';
	echo '<div class="prayer-times1 shadow-box"><h3>Prayer Times</h3>';
	echo '<table>';
	
	


	 echo '<tr>';
        echo '<th colspan="3">';
    
        $date = date('d-m-y', strtotime( $count.'day'));

        $count++;
        
        echo $date;
        $day = $date[0].$date[1];
        $month = $date[3].$date[4];
        $year = $date[6].$date[7];
        
        echo '</th>';
      echo '</tr>';

    $prayer_names = array("Fajr", "Sunrise", "Zuhar","Asr", "Sunsit", "Maghrib", "Ishaa");
    
    $prayTime = new PrayTime();
  
    static $latitude;
    static $longitude;
    static $tzone;


    if(isset($_GET['latitude'])){
   	$latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];
    $tzone = $_GET['tzone'];
	}

   $times = $prayTime->getDatePrayerTimes ($year, $month, $day, $latitude, $longitude, $tzone,
   						Auth::user()->calculation_method, Auth::user()->juristic_method);
    
    $i = 0;
	
	foreach ($prayer_names as $value) {
		
			
		echo '<tr>';
		
			echo '<td>';
				echo $value;
			echo '</td>';
			
			echo '<td>';
				echo $times[$i];
			echo '</td>';
		$i++;
		echo '</tr>';
	}
	
	echo '</table>';
	echo '</div>';
	echo '</div>';
	echo '</div>';

	}
	


		?>

	






    


    

