<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teams', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->integer('matches_played');
			$table->integer('win');
			$table->integer('lose');
			$table->integer('draw');
			$table->integer('goal_difference');
			$table->integer('points');
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
		Schema::drop('teams');
	}

}
