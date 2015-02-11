@extends('layouts.main')

@section('csslinks')
<link rel="stylesheet" media="screen and (max-width: 1400px) and (min-width: 300px)" href="css/charts.css" />

@stop

@section('tablinks')

<li class="active"><a href="homes">Home</a></li>
<li><a href="prayerlogs">Prayer Book</a></li>
<li><a href="prayers">Prayer Timing</a></li>
<li><a href="mosques">Mosque Finding</a></li>
<li><a href="qiblahdirections">Qiblah Direction</a></li>
<li><a href="settings">Settings</a></li>

@stop


@section('content')

<section id="main-slider" class="no-margin">
<div class="carousel slide">

<div class="carousel-inner">
<div class="item active" style="background-image:url(images/slider/bg1.jpg)">
<div class="container">
<div class="row slide-margin">
<div class="col-sm-6">
<div class="carousel-content">
<h1 class="animation animated-item-1">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h1>
<h2 class="animation animated-item-2">Assalam-o-Alaikum !السلام عليكم | welcome to Prayer Logger.</h2>

</div>
</div>
<div class="col-sm-6 hidden-xs animation animated-item-4">
<div class="slider-img">
<img src="images/slider/img1.png" class="img-responsive">
</div>
</div>
</div>
</div>
</div>
<div class="item" style="background-image:url(images/slider/bg2.jpg)">
<div class="container">
<div class="row slide-margin">
<div class="col-sm-6">

</div>
<div class="col-sm-6 hidden-xs animation animated-item-4">
<div class="slider-img">
<img src="images/slider/img2.png" class="img-responsive">
</div>
</div>
</div>
</div>
</div>

<div class="center wow fadeInDown">



<div class="pull-left">

</div>
<div class="media-body">

<div id="chart_div" class="chart"></div>
</div>

</div>
</section> 
<section id="conatcat-info">
<div class="container">
<div class="row">
<div class="col-sm-8">
<div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
<div class="pull-left">
<img class="img-responsive" src="images/service/phone.png" width="60" height="60" alt="Phone">
</div>
<div class="media-body">
<h2>Have a question about our Masjid or Islam?</h2>
<p>بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم<br>sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
</div>
</div>
</div>
</div>
</div>
</section>

@stop