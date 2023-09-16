<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $results = [
            [
                'user_id' => 2,
                'exam_id' => 1,
                'max_score' => 2,
                'total_score' => 2,
            ],
            [
                'user_id' => 2,
                'exam_id' => 1,
                'max_score' => 2,
                'total_score' => 2,
            ],
            // Add more result records as needed
        ];

        // Insert the data into the 'results' table
        DB::table('results')->insert($results);
    }
}
