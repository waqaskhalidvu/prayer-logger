@extends('layouts.main')


@section('csslinks')
	<!-- bootstrap -->
		
		{{HTML::style('assets/css/libs/font-awesome.css')}}
		{{HTML::style('assets/css/compiled/theme_styles.css')}}
		{{HTML::style('assets/css/libs/datepicker.css')}}
		{{HTML::style('assets/css/libs/bootstrap-timepicker.css')}}
		{{HTML::style('assets/css/libs/style.css')}}
		


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

		

	<header class="main-box-header clearfix">
		
						
		
		<table>
		<thead>
            <tr>
                <th colspan="2" style="text-align:center; font-size:25px">Prayer Information</th>

            </tr>
		</thead>
				
		
		
		
		<tbody>
		<tr>
			<td width="40%"><h4><b>Prayer Offered As</b></h4></td>
			<td> {{$prayerlog->prayer_type}}</td>
		</tr>
		@if($prayerlog->prayer_type == "Qaza")
		<tr>
		  <td><h4><b>Offered Date</b></h4></td>
		  <td> {{$prayerlog->offered_date}} </td>
		</tr>
		@endif
		
		<tr>
		  <td><h4><b>Offered Time</b></h4></td>
		  <td>{{$prayerlog->offered_time}}</td>
		</tr>
		<tr>
		  <td><h4><b>Prayer Offered At</b></h4></td>
		  <td>
		  	@if($prayerlog->mosque_id)
		  	Mosque
		  	@else
		  	Home
		  	@endif
		   </td>

		</tr>
		@foreach($prayerlog->mosques()->get() as $mosque)
		<tr>
		  <td><h4><b>Mosque Name</b></h4></td>
		  <td>
            @if($mosque->mosque_name)
		  		{{$mosque->mosque_name}}
		  	@endif
		  </td>
		</tr>

		<tr>
		  <td><h4><b>Country</b></h4></td>
		  <td>
		  	@if($mosque->country)
		  		{{$mosque->country}}
		  	@endif
		  </td>
		</tr>

		<tr>
		  <td><h4><b>State</b></h4></td>
		  <td>
		  	@if($mosque->state)
		  		{{$mosque->state}}
		  	@endif
		  </td>
		</tr>

		<tr>
		  <td><h4><b>City</b></h4></td>
		  <td>
		  	@if($mosque->city)
		  		{{$mosque->city}}
		  	@endif
		  </td>
		</tr>

		<tr>
		  <td><h4><b>Street</b></h4></td>
		  <td>
		  	@if($mosque->street)
		  		{{$mosque->street}}
		  	@endif
		  </td>
		</tr>

        @endforeach

		<tr>
			<td colspan="2" style = "margin-bottom: 10%;">
			<a href="{{ URL::previous() }}" class="btn btn-success col-lg-2" style="margin-left:80%">Back</a>
		</td>
		</tr>

		</tbody>
	</table>
			
{{Form::close()}}




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

@stop