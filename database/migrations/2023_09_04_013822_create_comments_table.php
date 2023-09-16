<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->id('id');
			$table->timestamps();
			$table->foreignId('video_id')->constrained()->cascadeOnDelete();
			$table->foreignId('user_id')->constrained()->cascadeOnDelete();
			$table->text('body');
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}
