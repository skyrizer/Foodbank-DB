<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cafe;
use App\Models\Role;
use Database\Factories\CafeFactory;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Cafe::factory()->create([
            'name' => 'Cafe Satria 1'
        ]);
        Cafe::factory()->create([
            'name' => 'Cafe Satria 2'
        ]);
        Cafe::factory()->create([
            'name' => 'Cafe Satria 3'
        ]);


        Role::factory()->create([
            'name' => 'Admin',
        ]);
        Role::factory()->create([
            'name' => 'Cafe Owner',
        ]);
        Role::factory()->create([
            'name' => 'Student',
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'abc12345',
            'phone_no' => '01161636065',
            'matric_no' => null,
            'role_id' => '1',
            'cafe_id' => null
        ]);

    }
}
