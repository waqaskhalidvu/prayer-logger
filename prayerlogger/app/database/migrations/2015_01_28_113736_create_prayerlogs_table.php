<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrayerlogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prayerlogs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('logged');
			$table->string('offered');
			$table->string('prayer_name');
			$table->date('prayer_date');
			$table->string('prayer_type');
			$table->date('offered_date');
			$table->time('offered_time');
			$table->timestamps();
			$table->integer('user_id');
			$table->integer('mosque_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prayerlogs');
	}

}
