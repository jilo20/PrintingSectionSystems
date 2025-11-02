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
        DB::table('requests')->insert([
            [
                'description' => 'Riso printing for class handouts',
                'forwarded_by' => 'Mr. Dela Cruz',
                'received_by' => 'Ms. Santos',
                'requested_by' => 'Prof. Ramirez',
                'status' => 'Approved',
                'service_type' => 'RISOGRAPH',
                'original' => 1,
                'copies' => 100,
                'type_of_paper' => 1,
                'is_b2b' => true,
                'department_id' => 1,
                'total_cost' => 250.00,
                'date_created' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'description' => 'Photocopy student records',
                'forwarded_by' => 'Admin Office',
                'received_by' => 'Mr. Cruz',
                'requested_by' => 'Registrar',
                'status' => 'Completed',
                'service_type' => 'PHOTOCOPY',
                'original' => 5,
                'copies' => 50,
                'type_of_paper' => 2,
                'is_b2b' => false,
                'department_id' => 2,
                'total_cost' => 80.00,
                'date_created' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'description' => 'ID card lamination',
                'forwarded_by' => 'Ms. Gonzales',
                'received_by' => 'Mr. Reyes',
                'requested_by' => 'Student Council',
                'status' => 'In Progress',
                'service_type' => 'LAMINATE',
                'original' => 20,
                'copies' => null,
                'type_of_paper' => null,
                'is_b2b' => null,
                'department_id' => 3,
                'total_cost' => 120.00,
                'date_created' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'description' => 'Sorting exam papers',
                'forwarded_by' => 'Dean\'s Office',
                'received_by' => 'Ms. Lim',
                'requested_by' => 'Faculty of SCS',
                'status' => 'Pending',
                'service_type' => 'SORT',
                'original' => null,
                'copies' => 300,
                'type_of_paper' => 2,
                'is_b2b' => null,
                'department_id' => 4,
                'total_cost' => 60.00,
                'date_created' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'description' => 'Print school event tarpaulin',
                'forwarded_by' => 'Marketing Office',
                'received_by' => 'Mr. Bautista',
                'requested_by' => 'Student Org',
                'status' => 'Completed',
                'service_type' => 'PRINT',
                'original' => 2,
                'copies' => 10,
                'type_of_paper' => 1,
                'is_b2b' => false,
                'department_id' => 5,
                'total_cost' => 500.00,
                'date_created' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
