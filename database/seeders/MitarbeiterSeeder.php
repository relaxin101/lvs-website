<?php

namespace Database\Seeders;

use App\Models\Mitarbeiter;
use Illuminate\Database\Seeder;

class MitarbeiterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mitarbeiter::factory()->create([
            'id' => 1,
        ]);
    }
}
