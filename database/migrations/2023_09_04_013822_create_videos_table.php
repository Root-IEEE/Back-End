<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTable extends Migration {

	public function up()
	{
		Schema::create('videos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->text('video');
			$table->string('title', 255);
			$table->text('description')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('videos');
	}
}
