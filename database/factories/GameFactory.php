<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'console_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'franquice' => $this->faker->company(),
            'developer' => $this->faker->company(),
            'publisher' => $this->faker->company(),
            'release_date' => $this->faker->date(),
            'genere' => $this->faker->word(),
            'theme' => $this->faker->word(),
            'clasification' => $this->faker->word(),
            'type' => $this->faker->word(),
            'image' => $this->faker->imageUrl(),
            

        ];
    }
}
