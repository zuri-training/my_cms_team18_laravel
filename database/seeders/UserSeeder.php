<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->createMany([
            [
                'name' => 'Admin1 Admin1',
                'email' => 'admin1@mail.com',
                'type' => 1,
            ],
            [
                'name' => 'Staff1 Staff1',
                'email' => 'staff1@mail.com',
                'type' => 2,
            ],
            [
                'name' => 'User1 User1',
                'email' => 'user1@mail.com',
                'type' => 3,
            ]
        ]);
    }
}
