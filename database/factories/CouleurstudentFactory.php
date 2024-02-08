<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Couleurstudent>
 */
class CouleurstudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vorname' => $this->faker->firstName,
            'nachname' => $this->faker->lastName,
            'couleurname' => $this->faker->word,
            'strasse' => $this->faker->streetAddress,
            'plz' => $this->faker->numberBetween(1000, 9000),
            'ort' => $this->faker->city,
            'email' => $this->faker->email,
            'telefon' => $this->faker->phoneNumber,
        ];
    }
}
