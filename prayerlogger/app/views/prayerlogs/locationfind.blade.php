
    {{ Form::open(array('route' => 'prayerlogs.store') ) }}
	

	<?PHP
			
            $date = date('d-m-Y');
			$day = $date[0].$date[1];
			$month = $date[3].$date[4];
			$year = $date[6].$date[7].$date[8].$date[9];
			
			echo "<input id='day' type='text' value=$day name='day' hidden>";
			echo "<input id='month' type='text' value=$month name='month' hidden>";
			echo "<input id='year' type='text' value=$year name='year' hidden>";
			echo "<input id='lati' type='text' name='lati' hidden>";
			echo "<input id='longi' type='text' name='longi' hidden>";
            echo "<input id='zone' type='text' name='timezone' hidden>";
            echo "<input id='minutes' type='text' name='minutes' hidden>";
            echo "<input id='hour' type='text' name='hour' hidden>";
			echo "<input id='form' type='submit' value='submit' hidden>";
			
   	?>

   	{{ Form::token() }}


@include('prayerlogs.includes.prayerlogs_script')