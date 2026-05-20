<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'R.J. Diepenbrock',
            'email' => 'rjdwebsites@gmail.com',
            'password' => Hash::make('rjdWebs!tes2023'),
            'email_verified_at' => now(),
        ]);

        User::factory()
            ->count(5)
            ->create();
    }
}
