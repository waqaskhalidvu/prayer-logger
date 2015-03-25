@extends('layouts.main')



@section('csslinks')
	<!-- bootstrap -->
		
		{{HTML::style('assets/css/libs/font-awesome.css')}}
		{{HTML::style('assets/css/compiled/theme_styles.css')}}
		{{HTML::style('assets/css/libs/datepicker.css')}}
		{{HTML::style('assets/css/libs/bootstrap-timepicker.css')}}
		


@stop


@section('tablinks')

<li>{{ HTML::linkRoute('homes.index', 'Home') }}</li>
<li class="active">{{ HTML::linkRoute('prayerlogs.index', 'Prayer Book') }}</li>
<li>{{ HTML::linkRoute('prayers.index', 'Prayer Timing') }}</li>
<li>{{ HTML::linkRoute('mosques.index', 'Mosque Finding') }}</li>
<li>{{ HTML::linkRoute('qiblahdirections.index', 'Qiblah Direction') }}</li>
<li>{{ HTML::linkRoute('settings.index', 'Settings') }}</li>

@stop


@section('content')

@include('prayerlogs.includes.countries')


		

		{{ Form::model($prayerlog, ['route' => ['prayerlogs.update', $prayerlog->id], 'method' => 'put'])}}
	
			<div class="row" style="margin-left:15%; margin-top:0%; border: 3px solid; border-radius: 10px; width:70%; border-color:#F3FAB6 ; background: #DFE2DB; height:100%">
			<div class="col-lg-10" style="margin-left:8%;">
				
					<header class="main-box-header clearfix">
						<h2>Enter Prayer Information</h2>
					</header>
					
				<div class="main-box-body clearfix" >

					<!...........................offered or unoffered for dropdown list............................>	
						<div class="row">
							<div class="form-group">
								<label>Select Prayer As</label>
								<select name="offered" id="offered_unoffered" class="form-control" onChange= "unoffered()">
									<option>Offer</option>
									<option>Unoffer</option>
								</select>
							</div>	
						</div>


	

					<!...........................offered as for dropdown list............................>	
						<div class="row">
							<div id="prayer_type" class="form-group">
								<label>Prayer offer as</label>
								<select name="prayer_type" id="prayer_types" class="form-control" onChange= "offered_as()">
									<option>Regular</option>
									<option>Qaza</option>
									<option>Qasar</option>
								</select>
							</div>	
						</div>

					<!...........................for date............................>
						<div class="row">
							<div class="form-group col-md-12">
								<label for="datepickerDateComponent">offer date</label>
								<div class="input-group" data-date-format="dd-mm-yyyy">
									<input name="offered_date" type="date" class="form-control" id="datepickerDateComponent" readonly disabled>
									<span class="input-group-addon"><i class="fa fa-th"></i></span>
								</div>
								
							</div>
						</div>
						
					
					
						
					
						
					<!...........................for Time............................>	
						<div class="row">
							<div class="form-group col-md-12">
								<label for="timepicker">Offer time</label>
								<div class="input-group input-append bootstrap-timepicker">
									<input name="offered_time" type="text" class="form-control" id="timepicker">
									<span class="add-on input-group-addon"><i class="fa fa-clock-o"></i></span>
								</div>
							</div>
						</div>

					<!...........................for dropdown list............................>	
						<div class="row">
							<div class="form-group">
								<label>Prayer offer at</label>
								<select name="offer_at" id="offered_at" class="form-control" onChange= "offered_place()">
									<option>Home</option>
									<option>Mosque</option>
								</select>
							</div>	
						</div>

						<header class="main-box-header clearfix">
						<h4>Enter Mosque information</h4>
						</header>

					<!...........................for button............................>
						<div class="row">
							<div class="form-group">
								<div class="col-lg-offset-8 col-lg-11">
									<!-- {{ link_to_route('prayerlogs.create', 'Select from google map', ['class="btn btn-success col-lg-2"'])}} -->
									<button id="google" type="button" class="btn btn-success col-lg-4" disabled>Select from google map</button>
								</div>
							</div>	
						</div>

					<!...........................for field............................>
					
						<div class="row" >
							<div class="form-group" >
								<label for="exampleTooltip">Mosque Name</label>
								<input name="mosque_name" disabled type="text" class="form-control" id="mosque_name" data-toggle="tooltip" data-placement="bottom" title="please input a valid state or provance name">
							</div>
						</div>

					<!...........................for dropdown list............................>	

						<div class="row">
							<div class="form-group">
								<label>Country</label>
								<select name="country" disabled id="country" name ="country" class="form-control">
								</select>
							</div>	
						</div>

					<!...........................for dropdown............................>
					
						<div class="row">
							<div class="form-group">
								<label>State</label>
								<select disabled name="state" id="state" name ="state" class="form-control">
								</select>
								<script language="javascript">
								populateCountries("country", "state");
 								</script>
							</div>	
						</div>



					<!...........................for field............................>
					
						<div class="row" >
							<div class="form-group" >
								<label for="exampleTooltip">City</label>
								<input name="city" disabled type="text" class="form-control" id="city" data-toggle="tooltip" data-placement="bottom" title="please input a valid city name">
							</div>
						</div>
					<!...........................for field............................>
					
						<div class="row" >
							<div class="form-group" >
								<label for="exampleTooltip">Street Address</label>
								<input name="street" disabled type="text" class="form-control" id="street" data-toggle="tooltip" data-placement="bottom" title="please input a valid street or address">
							</div>
						</div>
					
					
					


					<!...........................for button............................>
						
							<div class="form-group">
								<div class="col-lg-offset-6 col-lg-12">
									<table>
										<tr>
											<td> <button type="button" class="btn btn-success col-lg-12">Cancel</button> </td>
											<td> <button type="submit" class="btn btn-success col-lg-12">Submit</button> </td>
										</tr>
									</table>
								</div>
							</div>	
						</div>

						
						
						
					</div>
				</div>




@stop

@section('jslinks')

	<!-- global scripts -->
		{{ HTML::script('assets/js/jquery.js') }}
		{{ HTML::script('assets/js/bootstrap.js') }}
				
				
		<!-- this page specific scripts -->
		{{ HTML::script('assets/js/bootstrap-datepicker.js') }}
		{{ HTML::script('assets/js/daterangepicker.js') }}
		{{ HTML::script('assets/js/bootstrap-timepicker.min.js') }}
		{{ HTML::script('assets/js/countries.js') }}

		

		<!-- this page specific inline scripts -->
		<script>
			$(function($) {
				//tooltip init
				$('#exampleTooltip').tooltip();
			

				//datepicker
				$('#datepickerDate').datepicker({
				  format: 'mm-dd-yyyy'
				});

				$('#datepickerDateComponent').datepicker();
				
				//daterange picker
				$('#datepickerDateRange').daterangepicker();
				
				//timepicker
				$('#timepicker').timepicker({
					minuteStep: 5,
					showSeconds: true,
					showMeridian: false,
					disableFocus: false,
					showWidget: true
				}).focus(function() {
					$(this).next().trigger('click');
				});

				
			});
		</script>

		<script>
		function unoffered(){

			var x = document.getElementById("offered_unoffered");
			var selected_element = x.options[x.selectedIndex].text;
			if(selected_element=="Unoffer"){    
				document.getElementById("prayer_types").disabled=true;
				document.getElementById("datepickerDateComponent").disabled=true;
				document.getElementById("timepicker").disabled=true;
				document.getElementById("offered_at").disabled=true;
				document.getElementById("mosque_name").disabled=true;
				document.getElementById("country").disabled=true;
				document.getElementById("state").disabled=true;
				document.getElementById("city").disabled=true;
				document.getElementById("street").disabled=true;
				document.getElementById("google").disabled=true;
				
			}
			else
			 {
			 	document.getElementById("prayer_types").disabled=false;
				document.getElementById("timepicker").disabled=false;
				document.getElementById("offered_at").disabled=false;
				
			 }
			}

			<!--------------Offered_as function implementation------------------>

			function offered_as(){
	var x = document.getElementById("prayer_types");
	var selected_element = x.options[x.selectedIndex].text;
	if(selected_element=="Regular" || selected_element=="Qasar" ){
		document.getElementById("datepickerDateComponent").disabled=true;
	}
	else {
		document.getElementById("datepickerDateComponent").disabled=false;
	}
	
}
		<!---------------------Offered_at function implementation----------------------->
		function offered_place(){
	var x = document.getElementById("offered_at");
	var selected_element = x.options[x.selectedIndex].text;
	if(selected_element=="Home"){
		document.getElementById("mosque_name").disabled=true;
		document.getElementById("country").disabled=true;
		document.getElementById("state").disabled=true;
		document.getElementById("city").disabled=true;
		document.getElementById("street").disabled=true;
		document.getElementById("google").disabled=true;
	}
	else {
		document.getElementById("mosque_name").disabled=false;
		document.getElementById("country").disabled=false;
		document.getElementById("state").disabled=false;
		document.getElementById("city").disabled=false;
		document.getElementById("street").disabled=false;
		document.getElementById("google").disabled=false;
	}
}

		</script>


			<script type="text/javascript">

     

            $("#google").click(function(){
                 window.location = "/selectmosque";
            });       


 


		</script>



@stop