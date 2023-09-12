<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('video_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->text('body');
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}
