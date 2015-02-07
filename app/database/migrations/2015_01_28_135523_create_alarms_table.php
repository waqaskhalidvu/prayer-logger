<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlarmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alarms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('prayer_name');
			$table->boolean('status');
			$table->boolean('repeat');
			$table->string('repeat_days');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alarms');
	}

}
