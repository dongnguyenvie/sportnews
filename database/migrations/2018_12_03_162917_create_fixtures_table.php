<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFixturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fixtures', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('date');
			$table->string('team1');
			$table->string('team2');
			$table->string('time');
			$table->integer('league_id');
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
		Schema::drop('fixtures');
	}

}
