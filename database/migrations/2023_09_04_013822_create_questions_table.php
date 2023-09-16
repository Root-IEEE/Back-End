<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration {

	public function up()
	{
		Schema::create('questions', function(Blueprint $table) {
			$table->id('id');
			$table->timestamps();
			$table->foreignId('exam_id')->constrained()->cascadeOnDelete();
			$table->text('question');
		});
	}

	public function down()
	{
		Schema::drop('questions');
	}
}
