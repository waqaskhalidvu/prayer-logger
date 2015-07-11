@extends('layouts.main')

@section('csslinks')
<link rel="stylesheet" media="screen and (max-width: 1400px) and (min-width: 300px)" href="css/charts.css" />

@stop

@section('logo')
<a class="navbar-brand" href="homes" style="margin-left:0px">{{ HTML::image('images/logo.png') }}</a>
@stop

@section('tablinks')

<li class="active"><a href="homes">Home</a></li>
<li><a href="/locationfind">Prayer Book</a></li>
<li><a href="prayers">Prayer Timing</a></li>
<li><a href="mosques">Mosque Finding</a></li>
<li><a href="qiblahdirections">Qiblah Direction</a></li>
<li><a href="settings">Settings</a></li>

@stop


@section('content')

@for($i=0; $i<31; $i++)

	<input hidden id='{{ $i }}' value= {{ $data[$i] }}>
@endfor

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
<div>{{'<br>'. '<br>'}}</div>
<div id = 'pie' style="min-width: 310px; height: 250px; margin: 20 auto"></div>
<div id="chart-div" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

</div>

</div>
</section> 


@stop
@section('jslinks')
{{ HTML::script('assets/js/jquery-1.8.2.min.js') }}
{{ HTML::script('..//js/highcharts.js') }}

<script>
			$(function () { 
				<!-------counting prayers------------->
	 var total__fajr_days = Number(document.getElementById("25").value);
	// alert(total__fajr_days);
	
	var total__zuhar_days = Number(document.getElementById("26").value);
	var total__asar_days = Number(document.getElementById("27").value);
	var total__maghrib_days = Number(document.getElementById("28").value);
	var total__ishaa_days = Number(document.getElementById("29").value);
	
	
	var unlogged_fajr = (Number(document.getElementById("0").value)/total__fajr_days)*100;
	var unlogged_fajr = unlogged_fajr.toFixed(2);
	var unlogged_fajr = Number(unlogged_fajr);
	
	var unoffered_fajr = (Number(document.getElementById("1").value)/total__fajr_days)*100;
	var unoffered_fajr = unoffered_fajr.toFixed(2);
	var unoffered_fajr = Number(unoffered_fajr);

	var logged_regular_fajr = (Number(document.getElementById("2").value)/total__fajr_days)*100;
	var logged_regular_fajr = logged_regular_fajr.toFixed(2);
	var logged_regular_fajr = Number(logged_regular_fajr);
  	
  	
	var logged_qaza_fajr = (Number(document.getElementById("3").value)/total__fajr_days)*100;
	var logged_qaza_fajr = logged_qaza_fajr.toFixed(2);
	var logged_qaza_fajr = Number(logged_qaza_fajr);

	var logged_qasar_fajr = (Number(document.getElementById("4").value)/total__fajr_days)*100;
	var logged_qasar_fajr = logged_qasar_fajr.toFixed(2);
	var logged_qasar_fajr = Number(logged_qasar_fajr);

	var unlogged_zuhar = (Number(document.getElementById("5").value)/total__zuhar_days)*100;
	var unlogged_zuhar = unlogged_zuhar.toFixed(2);
	var unlogged_zuhar = Number(unlogged_zuhar);

	var unoffered_zuhar = (Number(document.getElementById("6").value)/total__zuhar_days)*100;
	var unoffered_zuhar = unoffered_zuhar.toFixed(2);
	var unoffered_zuhar = Number(unoffered_zuhar);

	var logged_regular_zuhar = (Number(document.getElementById("7").value)/total__zuhar_days)*100;
	var logged_regular_zuhar = logged_regular_zuhar.toFixed(2);
	var logged_regular_zuhar = Number(logged_regular_zuhar);

	var logged_qaza_zuhar = (Number(document.getElementById("8").value)/total__zuhar_days)*100;
	var logged_qaza_zuhar = logged_qaza_zuhar.toFixed(2);
	var logged_qaza_zuhar = Number(logged_qaza_zuhar);

	var logged_qasar_zuhar = (Number(document.getElementById("9").value)/total__zuhar_days)*100;
	var logged_qasar_zuhar = logged_qasar_zuhar.toFixed(2);
	var logged_qasar_zuhar = Number(logged_qasar_zuhar);

	var unlogged_asar = (Number(document.getElementById("10").value)/total__asar_days)*100;
	var unlogged_asar = unlogged_asar.toFixed(2);
	var unlogged_asar = Number(unlogged_asar);

	var unoffered_asar = (Number(document.getElementById("11").value)/total__asar_days)*100;
	var unoffered_asar = unoffered_asar.toFixed(2);
	var unoffered_asar = Number(unoffered_asar);

	var logged_regular_asar = (Number(document.getElementById("12").value)/total__asar_days)*100;
	var logged_regular_asar = logged_regular_asar.toFixed(2);
	var logged_regular_asar = Number(logged_regular_asar);

	var logged_qaza_asar = (Number(document.getElementById("13").value)/total__asar_days)*100;
	var logged_qaza_asar = logged_qaza_asar.toFixed(2);
	var logged_qaza_asar = Number(logged_qaza_asar);

	var logged_qasar_asar = (Number(document.getElementById("14").value)/total__asar_days)*100;
	var logged_qasar_asar = logged_qasar_asar.toFixed(2);
	var logged_qasar_asar = Number(logged_qasar_asar);

	var unlogged_maghrib = (Number(document.getElementById("15").value)/total__maghrib_days)*100;
	var unlogged_maghrib = unlogged_maghrib.toFixed(2);
	var unlogged_maghrib = Number(unlogged_maghrib);

	var unoffered_maghrib = (Number(document.getElementById("16").value)/total__maghrib_days)*100;
	var unoffered_maghrib = unoffered_maghrib.toFixed(2);
	var unoffered_maghrib = Number(unoffered_maghrib);

	var logged_regular_maghrib = (Number(document.getElementById("17").value)/total__maghrib_days)*100;
	var logged_regular_maghrib = logged_regular_maghrib.toFixed(2);
	var logged_regular_maghrib = Number(logged_regular_maghrib);

	var logged_qaza_maghrib = (Number(document.getElementById("18").value)/total__maghrib_days)*100;
	var logged_qaza_maghrib = logged_qaza_maghrib.toFixed(2);
	var logged_qaza_maghrib = Number(logged_qaza_maghrib);

	var logged_qasar_maghrib = (Number(document.getElementById("19").value)/total__maghrib_days)*100;
	var logged_qasar_maghrib = logged_qasar_maghrib.toFixed(2);
	var logged_qasar_maghrib = Number(logged_qasar_maghrib);

	var unlogged_ishaa = (Number(document.getElementById("20").value)/total__ishaa_days)*100;
	var unlogged_ishaa = unlogged_ishaa.toFixed(2);
	var unlogged_ishaa = Number(unlogged_ishaa);

	var unoffered_ishaa = (Number(document.getElementById("21").value)/total__ishaa_days)*100;
	var unoffered_ishaa = unoffered_ishaa.toFixed(2);
	var unoffered_ishaa = Number(unoffered_ishaa);

	var logged_regular_ishaa = (Number(document.getElementById("22").value)/total__ishaa_days)*100;
	var logged_regular_ishaa = logged_regular_ishaa.toFixed(2);
	var logged_regular_ishaa = Number(logged_regular_ishaa);

	var logged_qaza_ishaa = (Number(document.getElementById("23").value)/total__ishaa_days)*100;
	var logged_qaza_ishaa = logged_qaza_ishaa.toFixed(2);
	var logged_qaza_ishaa = Number(logged_qaza_ishaa);

	var logged_qasar_ishaa = (Number(document.getElementById("24").value)/total__ishaa_days)*100;
	var logged_qasar_ishaa = logged_qasar_ishaa.toFixed(2);
	var logged_qasar_ishaa = Number(logged_qasar_ishaa);
	var name= (String(document.getElementById("30").value));
	var fajr_average = (logged_regular_fajr+unoffered_fajr+logged_qaza_fajr+logged_qasar_fajr+unlogged_fajr)/5;
	

	
	<!-------counting prayers ends here------------->


				
    $('#chart-div').highcharts({

        title: {
            text: 'Prayers statistics in percentage'
        },
        credits: {
            text: 'Developed by prayer logger team'
            
        },
        xAxis: {
            categories: ['Fajr', 'Zuhar', 'Asar', 'Maghrib', 'Ishaa']
        },
        
        series: [{
            type: 'column',
            name: 'Regular',
            data: [logged_regular_fajr, logged_regular_zuhar, logged_regular_asar,  logged_regular_maghrib, logged_regular_ishaa],
            
        }, {
            type: 'column',
            name: 'Missed',
            data: [unoffered_fajr, unoffered_zuhar,unoffered_asar,unoffered_maghrib, unoffered_ishaa],
				  
        }, {
            type: 'column',
            name: 'Qaza',
            data: [logged_qaza_fajr,logged_qaza_zuhar,logged_qaza_asar,logged_qaza_maghrib, logged_qaza_ishaa],
            
        }, {
            type: 'column',
            name: 'Qasr',
            data: [logged_qasar_fajr,logged_qasar_zuhar,logged_qasar_asar,logged_qasar_maghrib,logged_qasar_ishaa]
        }, {
            type: 'column',
            name: 'Unlogged',
            data: [unlogged_fajr,unlogged_zuhar,unlogged_asar,unlogged_maghrib,unlogged_ishaa],
			
        }/*,{
            type: 'spline',
            name: 'Average',
            data: [3, 2.67, 3, 6.33, 3.33],
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            
        }
        }*/]
    });
});
		</script>

		<script>

		var total_unlogged_fajr = Number(document.getElementById("0").value);
		var total_unlogged_zuhar = Number(document.getElementById("5").value);
		var total_unlogged_asar = Number(document.getElementById("10").value);
		var total_unlogged_maghrib = Number(document.getElementById("15").value);
		var total_unlogged_ishaa = Number(document.getElementById("20").value);

		var total_unlogged_prayers = total_unlogged_fajr+total_unlogged_zuhar+total_unlogged_asar+total_unlogged_maghrib+total_unlogged_ishaa;

		var total_unoffered_fajr = Number(document.getElementById("1").value);
		var total_unoffered_zuhar = Number(document.getElementById("6").value);
		var total_unoffered_asar = Number(document.getElementById("11").value);
		var total_unoffered_maghrib = Number(document.getElementById("16").value);
		var total_unoffered_ishaa = Number(document.getElementById("21").value);

		var total_unoffered_prayers = total_unoffered_fajr+total_unoffered_zuhar+total_unoffered_asar+total_unoffered_maghrib+total_unoffered_ishaa;

		var total_qasar_fajr = Number(document.getElementById("4").value);
		var total_qasar_zuhar = Number(document.getElementById("9").value);
		var total_qasar_asar = Number(document.getElementById("14").value);
		var total_qasar_maghrib = Number(document.getElementById("19").value);
		var total_qasar_ishaa = Number(document.getElementById("24").value);

		var total_qasar_prayers =total_qasar_fajr+total_qasar_zuhar+total_qasar_asar+total_qasar_maghrib+total_qasar_ishaa;


		var total_qaza_fajr = Number(document.getElementById("3").value);
		var total_qaza_zuhar = Number(document.getElementById("8").value);
		var total_qaza_asar = Number(document.getElementById("13").value);
		var total_qaza_maghrib = Number(document.getElementById("18").value);
		var total_qaza_ishaa = Number(document.getElementById("23").value);
		
		var total_qaza_prayers = total_qaza_fajr+total_qaza_zuhar+total_qaza_asar+total_qaza_maghrib+total_qaza_ishaa;

		var total_regular_fajr = Number(document.getElementById("2").value);
		var total_regular_zuhar = Number(document.getElementById("7").value);
		var total_regular_asar = Number(document.getElementById("12").value);
		var total_regular_maghrib = Number(document.getElementById("17").value);
		var total_regular_ishaa = Number(document.getElementById("22").value);
		var total_regular_prayers =total_regular_fajr+total_regular_zuhar+total_regular_asar+total_regular_maghrib+total_regular_ishaa;

		var total_prayers = total_unlogged_prayers+total_unoffered_prayers+total_qasar_prayers+total_qaza_prayers+total_regular_prayers;
		$('#pie').highcharts({


	chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: true
        },
        credits: {
            enabled: false
            
        },
		title: {
            text: null
        },
        labels: {
            items: [{
                html: 'Prayers Statistics',
                style: {
                    left: '10%',
                    top: '60%',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
			
            type: 'pie',
            name: 'Prayers',
            data: [{
                name: 'Regular',
                y: total_regular_prayers, 
                //color: Highcharts.getOptions().colors[0] // Jane's color
            }, {
                name: 'Missed',
                y: total_unoffered_prayers,
               // color: Highcharts.getOptions().colors[1] // John's color
            },{
                name: 'Qaza',
                y: total_qaza_prayers,
//color: Highcharts.getOptions().colors[2] // John's color
            },{
                name: 'Qasr',
                y: total_qasar_prayers,
               // color: Highcharts.getOptions().colors[3] // John's color
            }, {
                name: 'Unlogged',
                y: total_unlogged_prayers,
                //color: Highcharts.getOptions().colors[4] // Joe's color
            },{
                name: 'Total',
                y: total_prayers,
               // color: Highcharts.getOptions().colors[3] // John's color
            }],
            center: [150, 80],
            size: 100,
            showInLegend: false,
            dataLabels: {
                enabled: true
            }
        }]
       
      
    });

		
		</script>
@stop

