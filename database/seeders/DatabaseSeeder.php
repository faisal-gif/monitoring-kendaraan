<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@itsolutionstuff.com',
                'type' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Manager1',
                'email' => 'manager@itsolutionstuff.com',
                'type' => 0,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Mandor1',
                'email' => 'mandor@itsolutionstuff.com',
                'type' => 0,
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
