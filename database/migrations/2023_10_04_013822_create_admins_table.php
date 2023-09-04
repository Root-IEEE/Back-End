<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Admin;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminsTable extends Migration {

	public function up()
	{
		Schema::create('admins', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('username', 255);
			$table->string('email', 255);
			$table->string('password', 255);
			$table->string('phone', 50);
			$table->text('image')->nullable();
			$table->boolean('is_active')->default(false);
		});

        Admin::create([
            'name' => 'zeyad',
            'username' => 'zozo',
            'phone' => '01145980208',
            'email' => 'admin@admin.com',
            'is_active' => 1,
            'password' => bcrypt(123),
        ]);

        $role = Role::create(['name' => 'super_admin', 'guard_name' => 'web']);
        $permissions = Permission::all();
        $role->syncPermissions($permissions);
        $admin = Admin::first();
        $admin->assignRole('super_admin');
	}

	public function down()
	{
		Schema::drop('admins');
	}
}
