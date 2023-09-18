<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'user_id' => 5,
            'video' => 'https://vimeo.com/518190130',
            'title' => "What's your dream",
            'description' => 'street photography',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed the second video
        DB::table('videos')->insert([
            'user_id' => 5,
            'video' => 'https://vimeo.com/518177129',
            'title' => "What's your dream",
            'description' => 'A day in Mansoura streets',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed the third video
        DB::table('videos')->insert([
            'user_id' => 5,
            'video' => 'https://vimeo.com/518184774',
            'title' => 'summer time',
            'description' => 'short trip to Marsa Matrouh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('videos')->insert([
            'user_id' => 5,
            'video' => 'https://vimeo.com/518184774',
            'title' => 'summer time',
            'description' => 'short trip to Marsa Matrouh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'user_id' => 5,
            'video' => 'https://vimeo.com/518184774',
            'title' => 'summer time',
            'description' => 'short trip to Marsa Matrouh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'user_id' => 5,
            'video' => 'https://vimeo.com/518184774',
            'title' => 'summer time',
            'description' => 'short trip to Marsa Matrouh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'user_id' => 5,
            'video' => 'https://vimeo.com/518184774',
            'title' => 'summer time',
            'description' => 'short trip to Marsa Matrouh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'user_id' => 5,
            'video' => 'https://vimeo.com/518184774',
            'title' => 'summer time',
            'description' => 'short trip to Marsa Matrouh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'user_id' => 5,
            'video' => 'https://vimeo.com/518184774',
            'title' => 'summer time',
            'description' => 'short trip to Marsa Matrouh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'user_id' => 5,
            'video' => 'https://vimeo.com/518184774',
            'title' => 'summer time',
            'description' => 'short trip to Marsa Matrouh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'user_id' => 5,
            'video' => 'https://vimeo.com/518184774',
            'title' => 'summer time',
            'description' => 'short trip to Marsa Matrouh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'user_id' => 5,
            'video' => 'https://vimeo.com/518184774',
            'title' => 'summer time',
            'description' => 'short trip to Marsa Matrouh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
