<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'exam_id' => 1,
            'question' => "what is your name?",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('questions')->insert([
            'exam_id' => 1,
            'question' => "where do you live?",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('questions')->insert([
            'exam_id' => 1,
            'question' => "where do you live?",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('questions')->insert([
            'exam_id' => 1,
            'question' => "where do you live?",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('questions')->insert([
            'exam_id' => 1,
            'question' => "where do you live?",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('questions')->insert([
            'exam_id' => 1,
            'question' => "where do you live?",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('questions')->insert([
            'exam_id' => 1,
            'question' => "where do you live?",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('questions')->insert([
            'exam_id' => 1,
            'question' => "where do you live?",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
