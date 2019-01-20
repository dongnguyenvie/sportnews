<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title');
			$table->text('summary', 65535);
			$table->text('body', 65535);
			$table->string('image')->nullable();
			$table->integer('views')->nullable()->default(0);
			$table->integer('categories_id');
			$table->integer('user_id');
			$table->integer('Breaking_news');
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
		Schema::drop('posts');
	}

}
