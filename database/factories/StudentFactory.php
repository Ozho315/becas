<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'last_name' => fake()->lastName(),
            'identification_number' => fake()->numerify('##########'),
            'average_rating' => fake()->numberBetween(1, 10),
            'average_incomes' => fake()->numberBetween(1, 1000),
            'is_disabled' => fake()->boolean(),
            'phone_number' => fake()->numerify('##########'),
            'address' => fake()->streetAddress(),
            'profile_picture_path' => null,
            'semester' => fake()->numberBetween(1, 7),
            'major_id' => fake()->numberBetween(1, 3),
        ];
    }
}
