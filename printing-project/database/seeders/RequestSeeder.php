<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('request_forms')->insert([
            [
                'receivedBy' => null,
                'forwardedBy' => 'Edwin Allanic',
                'requestedBy' => 'Maria Lorna Miro',
                'approvedBy' => 'John Leeroy Gadiane',
                'timeIn' => now(), // current datetime
                'timeOut' => null,
                'date' => now()->toDateString(), // optional if you want the date column
                'deptId' => 2,
                'userId' => 1,
                'totalCost' => 0,
            ],
        ]);
    }
}
