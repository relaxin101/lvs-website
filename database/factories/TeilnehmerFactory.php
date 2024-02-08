<?php

namespace Database\Factories;

use App\Models\Couleurstudent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teilnehmer>
 */
class TeilnehmerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reception' => $this->faker->date,
            'burschung' => $this->faker->date,
            'essen' => 'normal',
            'couleurstudent_id' => Couleurstudent::query()->inRandomOrder()->first()->id,
            'sonstiges' => $this->faker->sentence,
            'notfallkontakt' => $this->faker->name

        ];
    }
}
