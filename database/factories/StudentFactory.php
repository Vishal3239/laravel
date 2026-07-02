<?php

namespace Database\Factories;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<student>
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
            'name' => $this -> faker -> name(),
            'phone' => $this -> faker -> phoneNumber(),
            'age' => $this -> faker -> numberBetween(18,60)
        ];
    }
}
