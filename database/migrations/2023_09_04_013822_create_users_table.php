<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('email', 255);
			$table->string('password', 255);
			$table->text('phone', 50)->nullable();
			$table->text('image')->nullable();
		});

	}

	public function down()
	{
		Schema::drop('users');
	}
}
