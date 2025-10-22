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
            ['name' => 'Property Administrator Office Main (PAO)'],
            ['name' => 'Property Administrator Office Basak (PAO)'],
            ['name' => 'Bookstore Main'],
            ['name' => 'Bookstore Basak'],
            ['name' => 'PAO Stock'],
            ['name' => 'Printing Section'],
        ];

        foreach ($departments as $dept) {
            Department::create($dept);
        }
    }
}
