<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'surname' => 'User',
            'email' => 'admin@test.com',
            'password' => 'adminpassword'
        ]);

        User::factory(2)->create();
    }
}
