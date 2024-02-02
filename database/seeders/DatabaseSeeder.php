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
        $this->call(
            [
                VerbindungSeeder::class,
                UserSeeder::class,
                CouleurstudentSeeder::class,
                SchulungSeeder::class,
                TeilnehmerSeeder::class,
                MitarbeiterSeeder::class,
                GruppenSeeder::class,
                ZimmerSeeder::class,
            ]
        );
    }
}
