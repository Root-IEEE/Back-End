<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studentDetails = [
            [
                'father_phone' => '123-456-7890',
                'mother_phone' => '987-654-3210',
                'class_name' => 'Grade 10',
                'user_id' => 2,
            ],
            [
                'father_phone' => '111-222-3333',
                'mother_phone' => '444-555-6666',
                'class_name' => 'Grade 11',
                'user_id' => 2,
            ],
        ];
        DB::table('students_details')->insert($studentDetails);

    }
}
