<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMosquesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mosques', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('mosque_name');
			$table->string('country');
			$table->string('state');
			$table->string('city');
			$table->string('street');
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
		Schema::drop('mosques');
	}

}
