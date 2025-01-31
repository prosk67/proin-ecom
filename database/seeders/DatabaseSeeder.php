<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Proyash',
            'email' => 'real@mail.com',
            'phone'=> 01111111,
            'address'=> 'My address',
            'password'=> '12345678',
            'usertype'=> 'user'
        ]);
    }
}
