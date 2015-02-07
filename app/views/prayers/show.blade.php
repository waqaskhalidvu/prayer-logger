@include('prayers.includes.PrayTime')
<?php



for ($n=0; $n < 3; $n++) { 



echo '<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">';
echo '<div class="feature-wrap">';
echo '<div class="prayer-times1 shadow-box"><h3>Prayer Times</h3>';
echo '<table>';
	
	
	  echo '<tr>';
        echo '<th colspan="3">';
        $date = date('d-m-y', strtotime( $n.'day'));
        echo $date;
        $day = $date[0].$date[1];
        $month = $date[3].$date[4];
        $year = $date[6].$date[7];
        echo $date('p');
        echo '</th>';
    echo '</tr>';

    $prayer_names = array("Fajr", "Sunrise", "Zuhar","Asr", "Sunsit", "Maghrib", "Ishaa");
    
    $prayTime = new PrayTime();
    

    $times = $prayTime->getDatePrayerTimes ($year, $month, $day, 31.5497, 74.3436, 5);
    
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





    


    

