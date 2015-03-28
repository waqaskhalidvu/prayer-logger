@extends('layouts.main')

@section('csslinks')
	<!-- bootstrap -->
		
		{{HTML::style('assets/css/libs/font-awesome.css')}}
		{{HTML::style('assets/css/compiled/theme_styles.css')}}
		{{HTML::style('assets/css/libs/datepicker.css')}}
		{{HTML::style('assets/css/libs/bootstrap-timepicker.css')}}
		


@stop

@section('logo')
<a class="navbar-brand" href="homes" style="margin-left:100px">{{ HTML::image('images/logo.png') }}</a>
@stop

@section('tablinks')

<li><a href="homes">Home</a></li>
<li><a href="/locationfind">Prayer Book</a></li>
<li><a href="prayers">Prayer Timing</a></li>
<li><a href="mosques">Mosque Finding</a></li>
<li><a href="qiblahdirections">Qiblah Direction</a></li>
<li class="active"><a href="settings">Settings</a></li>

@stop

@section('content')
<br>
		{{ Form::open(['route' => ['settings.store'], 'method' => 'POST'])}}
	
			<div class="row" style="margin-left:15%; margin-top:0%; border: 3px solid; border-radius: 10px; width:65%; border-color:#F3FAB6 ; background: #DFE2DB; height:100%">
				<div class="col-lg-10" style="margin-left:8%;">
					<header class="main-box-header clearfix">
						<h2><br/>Enter Prayer Information</h2>
					</header>

			<!...........................for dropdown list............................>	
					<div class="row">
						<div class="form-group">
							<label>Calculation method</label>
							{{ Form::select('status', ['0' => 'Ithna Ashari', 
							'1' => 'University of Islamic Sciences, Karachi', 
							'2' => 'Islamic Society of North America (ISNA)', 
							'3' => 'Muslim World League (MWL)', 
							'4' => 'Umm al-Qura, Makkah', 
							'5' => 'Egyptian General Authority of Survey', 
							'7' => 'Institute of Geophysics, University of Tehran', 
							], $calculation_method,['class' => 'form-control', 'name' => 'calculation_method']) }}
							
						</div>	
					</div>

					<div class="row">

						<div class="form-group">
							<label>Calculation method</label>
							{{ Form::select('status', ['0' => 'Shafii (standard)', 
							'1' => 'Hanafi', 
							], $juristic_method,['class' => 'form-control', 'name' => 'juristic_method']) }}
							
						</div>
						
					</div>
				
			<!...........................for button............................>
						
					<div class="form-group">
						<div class="col-lg-offset-6 col-lg-12">
							<table>
								<tr>
									<td> <button type="submit" class="btn btn-success col-lg-12">Ok</button> </td>

								</tr>
								
							</table>

							<div style='font-size:1.1em' >
								@if(Session::has('flash_message'))
										{{Session::get('flash_message')}}
									@endif
							</div>
							<br/>
							<br/>
						</div>
					</div>

				</div>
			</div>
			{{ Form::close() }}	
			
				<br>

			<div style='background-color:green; color:white;' align='center'>
				

			</div>
			
			
<section>
</section>

@stop
