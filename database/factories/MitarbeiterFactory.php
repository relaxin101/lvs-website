<?php

namespace Database\Factories;

use App\Models\enums\RossiFunktionen;
use App\Models\enums\RossiStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mitarbeiter>
 */
class MitarbeiterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status_RBE' => $this->faker->randomElement(RossiStatus::values()),
            'funktion_RBE' => $this->faker->randomElement(RossiFunktionen::values()),
            'reception_RBE' => $this->faker->numberBetween(2000, 2024),
            'branderung_RBE' => $this->faker->numberBetween(2000, 2024),
            'burschung_RBE' => $this->faker->numberBetween(2000, 2024),

        ];
    }
}
