<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['guest', 'student', 'teacher_assistant', 'teacher', 'admin'];

        foreach ($roles as $roleName) {
            Role::create(['name' => $roleName]);
        }
    }
}
