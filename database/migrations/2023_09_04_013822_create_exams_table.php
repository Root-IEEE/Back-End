<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamsTable extends Migration {

	public function up()
	{
		Schema::create('exams', function(Blueprint $table) {
			$table->id('id');
            $table->foreignId('video_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
			$table->string('title', 255);
			$table->text('description')->nullable();
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('exams');
	}
}
