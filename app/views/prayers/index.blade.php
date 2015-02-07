@extends('layouts.main')
@include('prayers.includes.PrayTime')

@section('tablinks')

<li><a href="homes">Home</a></li>
<li><a href="prayerlogs">Prayer Book</a></li>
<li class="active"><a href="prayers">Prayer Timing</a></li>
<li><a href="mosques">Mosque Finding</a></li>
<li><a href="qiblahdirections">Qiblah Direction</a></li>
<li><a href="settings">Settings</a></li>

@stop


@section('content')

<section id="feature" class="transparent-bg" >
  
<div class="container" style="width: 90%">
<div class="center wow fadeInDown">
<h2>Prayer Times</h2>
</div>

<! -----------------for all------------------- - ->
<div class="row">
<div class="features">
    
 <! -- ---------------------main slider---------------------------- ->
<div id="carousel-slider" class="carousel slide" data-interval="false">
    <! --small list -->

    
    <! ----------------------small list closed------------ - ->
<div class="carousel-inner" style="margin-left: 5%">
    

    <! ----------------------defult div------------ - ->
<div class="item active">   

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


</div>
    
<! ------------------------------second un active div ------------------------------------------>    
<div id="div1" class="item"> 





</div> 



</div>
<! --    ------------------in slider body-------------------------->
<a id="prev" class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
<i class="fa fa-angle-left"></i>
</a>
<a id="next" class="right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
<i class="fa fa-angle-right"></i>

</a>

</div>  
<!-  -    ---------------------------main slider close------------------------------->
    
</div>
</div>
</div>
</section>

<div id='div1'></div>

<?php print_r($_REQUEST) ; ?>

@stop

@section('jslinks')




@include('prayers.includes.prayers-script')
<script src="js/jquery_new.js" type="text/javascript"></script>

@stop