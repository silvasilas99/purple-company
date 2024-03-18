<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name,
            "cpf" => $this->generateRandomCPF(),
            "email" => fake()->email
        ];
    }

    /**
     * Return a 11 numeric-digits string
     *
     * @return string
     */
    private function generateRandomCPF () : string
    {
        return
            (string)rand(pow(10, 11-1), pow(10, 11)-1);
    }
}
