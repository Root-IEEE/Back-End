<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultsTable extends Migration {

	public function up()
	{
		Schema::create('results', function(Blueprint $table) {
			$table->id('id');
			$table->timestamps();
			$table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('exam_id')->constrained()->cascadeOnDelete();
            $table->integer('max_score')->unsigned();
			$table->integer('total_score')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('results');
	}
}
