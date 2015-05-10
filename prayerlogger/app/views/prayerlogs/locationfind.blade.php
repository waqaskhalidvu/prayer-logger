
    {{ Form::open(array('route' => 'prayerlogs.store') ) }}
	

	<?PHP
			
			echo "<input id='day' type='text' name='day' hidden>";
			echo "<input id='month' type='text' name='month' hidden>";
			echo "<input id='year' type='text' name='year' hidden>";
			echo "<input id='lati' type='text' name='lati' hidden>";
			echo "<input id='longi' type='text' name='longi' hidden>";
            echo "<input id='zone' type='text' name='timezone' hidden>";
            echo "<input id='minutes' type='text' name='minutes' hidden>";
            echo "<input id='hour' type='text' name='hour' hidden>";
			echo "<input id='form' type='submit' value='submit' hidden>";
			
   	?>

   	{{ Form::token() }}


@include('prayerlogs.includes.prayerlogs_script')