<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOptionsTable extends Migration {

	public function up()
	{
		Schema::create('options', function(Blueprint $table) {
			$table->id('id');
			$table->timestamps();
			$table->foreignId('question_id')->constrained()->cascadeOnDelete();
			$table->text('body');
			$table->boolean('status')->default(false);
		});
	}

	public function down()
	{
		Schema::drop('options');
	}
}
