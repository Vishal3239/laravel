<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('123456'),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'role' => $this->faker->randomElement(['admin', 'user']),
            'status' => $this->faker->boolean(),
        ];
    }
}
