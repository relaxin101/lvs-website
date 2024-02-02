<?php

namespace Database\Seeders;

use App\Models\Couleurstudent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouleurstudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Couleurstudent::factory()
            ->create([
                'id' => 1,
                'vorname' => 'Lukas',
                'nachname' => 'Herold',
                'couleurname' => 'Genesis'
            ]);
    }
}
