<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
            'user_id' => 4,
            'video_id' => 1,
            'title' => "exam 1",
            'description' => 'MCQ test',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'user_id' => 5,
            'video_id' => 2,
            'title' => "exam 2",
            'description' => 'MCQ test',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('exams')->insert([
            'user_id' => 4,
            'video_id' => 3,
            'title' => "exam 3",
            'description' => 'MCQ test',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
