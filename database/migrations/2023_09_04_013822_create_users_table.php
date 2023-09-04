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
			$table->string('username', 255);
			$table->string('email', 255);
			$table->string('password', 255);
			$table->string('phone', 50);
			$table->string('father_phone', 50)->nullable();
			$table->string('mother_phone', 50)->nullable();
			$table->boolean('is_active')->default(false);
			$table->text('image')->nullable();
		});

	}

	public function down()
	{
		Schema::drop('users');
	}
}
