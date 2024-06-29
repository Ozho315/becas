<?php

namespace Database\Factories;

use App\Models\Committee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professor>
 */
class ProfessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $committeeId = Committee::inRandomOrder()->first()->id;
        return [
            'name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'identification_number' => $this->faker->numerify('##########'),
            'committee_id' => $committeeId,
        ];
    }
}
