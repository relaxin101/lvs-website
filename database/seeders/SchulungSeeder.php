<?php

namespace Database\Seeders;

use App\Models\Schulung;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchulungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schulung::factory()->create([
            'id' => 1,
            'jahr' => 2024,
            'schulungsleiter' => 1,
            'landessenior' => 'Martin Lorenzer v. Tempus',
            'landesphilistersenior' => 'Tobias Ziegler v. Amboss',
            'landesvorsitzender' => 'Markus Weiner v. Weini'

        ]);
    }
}
