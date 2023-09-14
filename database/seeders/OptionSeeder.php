<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'question_id' => 1,
            'body' => "Mohamed",
            'status'=>'0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('options')->insert([
            'question_id' => 1,
            'body' => "Zeyad",
            'status'=>"1",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('options')->insert([
            'question_id' => 1,
            'body' => "Ahmed",
            'status'=>'0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('options')->insert([
            'question_id' => 1,
            'body' => "Mostafa",
            'status'=>'0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('options')->insert([
            'question_id' => 2,
            'body' => "Mansoura",
            'status'=>'1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('options')->insert([
            'question_id' => 2,
            'body' => "Cairo",
            'status'=>'0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('options')->insert([
            'question_id' => 2,
            'body' => "Alexandria",
            'status'=>'0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('options')->insert([
            'question_id' => 2,
            'body' => "Aswan",
            'status'=>'0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
