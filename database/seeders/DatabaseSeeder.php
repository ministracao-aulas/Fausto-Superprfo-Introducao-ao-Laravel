<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->make([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
        ])->toArray();

        $user['password'] = Hash::make('power@123');

        \App\Models\User::updateOrCreate([
            'email' => $user['email'],
        ], $user);
    }
}
