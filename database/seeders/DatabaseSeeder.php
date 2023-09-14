<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(GuestSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(TeacherAssistantSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call (AdminSeeder::class);
        $this->call (VideoSeeder::class);
        $this->call (ExamSeeder::class);
        $this->call (QuestionSeeder::class);
        $this->call (OptionSeeder::class);


    }
}
