<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamsTable extends Migration {

	public function up()
	{
		Schema::create('exams', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('video_id');
			$table->integer('admin_id')->unsigned();
			$table->string('title', 255);
			$table->text('notes')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('exams');
	}
}