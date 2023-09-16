<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionUserData = [
            [
                'user_id' => 2,
                'question_id' => 1,
                'option_id' => 2,
                'exam_id' => 1,
            ],
            [
                'user_id' => 2,
                'question_id' => 2,
                'option_id' => 5,
                'exam_id' => 1,
            ],
        ];
        foreach ($optionUserData as $data) {
            DB::table('option_user')->updateOrInsert(
                [
                    'user_id' => $data['user_id'],
                    'option_id' => $data['option_id'],
                ],
                $data
            );
        }
    }
}
