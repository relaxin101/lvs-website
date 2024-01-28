<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'id' => 1,
            'name' => 'Verwaltung',
            'email' => 'verwaltung@noelvs.at',
            'email_verified_at' => now(),
            'password' => Hash::make('wunderliche_kräuter')
        ]);
    }
}
