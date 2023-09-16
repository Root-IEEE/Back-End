<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultsTable extends Migration {

	public function up()
	{
		Schema::create('results', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
            $table->integer('exam_id')->unsigned();
            $table->integer('max_score')->unsigned();
			$table->integer('total_score')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('results');
	}
}
