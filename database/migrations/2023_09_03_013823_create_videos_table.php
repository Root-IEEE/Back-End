<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTable extends Migration {

	public function up()
	{
		Schema::create('videos', function(Blueprint $table) {
			$table->id('id');
			$table->timestamps();
			$table->foreignId('user_id')->constrained()->cascadeOnDelete();
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
