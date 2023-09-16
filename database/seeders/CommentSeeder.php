<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [
                'video_id' => 1,
                'user_id' => 1,
                'body' => 'Nice',
            ],
            [
                'video_id' => 1,
                'user_id' => 2,
                'body' => 'Great video!',
            ],
        ];

        DB::table('comments')->insert($comments);
    }
}
