<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['deptName' => 'Property Administrator Office Main (PAO)'],
            ['deptName' => 'Property Administrator Office Basak (PAO)'],
            ['deptName' => 'Bookstore Main'],
            ['deptName' => 'Bookstore Basak'],
            ['deptName' => 'PAO Stock'],
            ['deptName' => 'Printing Section'],
        ];

        foreach ($departments as $dept) {
            Department::create($dept);
        }
    }
}
