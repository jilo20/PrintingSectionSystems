<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $users = [
            [
                'fname' => 'Angelo',
                'lname' => 'Bazar',
                'email' => 'angelo.bazar.23@usjr.edu.ph',
                'password' => bcrypt('printing123'),
                'department' => 5,
                'role' => 0,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
