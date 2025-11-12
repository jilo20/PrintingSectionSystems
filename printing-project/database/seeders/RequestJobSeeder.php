<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestJobSeeder extends Seeder
{
    public function run(): void
    {
        // Example: adding 3 jobs for requestFormId 1
        DB::table('request_jobs')->insert([
            [
                'requestFormId' => 1,
                'description' => 'First Periodical Test Mapeh 5',
                'service_type' => 'RISOGRAPH',
                'paperType' => 1,
                'copies' => 50,
                'originals' => 5,
                'isB2B' => false,
                'isFilm' => false,
                'cost' => 250.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'requestFormId' => 1,
                'description' => 'Summative Math 3',
                'service_type' => 'RISOGRAPH',
                'paperType' => 2,
                'copies' => 100,
                'originals' => 10,
                'isB2B' => true,
                'isFilm' => false,
                'cost' => 500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'requestFormId' => 1,
                'description' => 'Quiz #3',
                'service_type' => 'RISOGRAPH',
                'paperType' => 1,
                'copies' => 30,
                'originals' => 3,
                'isB2B' => false,
                'isFilm' => true,
                'cost' => 150.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
