@extends('layouts.main')
@include('prayers.includes.PrayTime')

@section('tablinks')

<li><a href="homes">Home</a></li>
<li><a href="/locationfind">Prayer Book</a></li>
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


<div id="result"></div>



<! -----------------for all------------------- - ->
<div class="row">
<div class="features">
    
 <! -- ---------------------main slider---------------------------- ->
<div id="carousel-slider" class="carousel slide" data-interval="false">
    <! --small list -->

    
    <! ----------------------small list closed------------ - ->
<div class="carousel-inner" style="margin-left: 5%">
    




<div id='div0' class="item active">  </div> 










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


@stop

@section('jslinks')




@include('prayers.includes.prayers-script')
<script src="js/jquery_new.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeLzjWfDaqBze8j7qKJL17XH4ZsMjsTx0&sensor=true">
</script>

@stop