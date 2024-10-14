<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'label' => fake()->firstname(),
            'price' => fake()->randomFloat(2, 10, 1500),
            'desc' => fake()->sentence(15),
            'birth_date' => fake()->dateTimeBetween(),
            'image_path' => fake()->imageUrl(640, 480, fake()->firstname()),
            'user_id' => fake()->numberBetween(1, 2),
        ];
    }
}
