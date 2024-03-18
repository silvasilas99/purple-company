<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeesRole>
 */
class EmployeesRoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "performance_grade" =>
                $this->generateRandomFloatBetweenNumbers(0, 10)
        ];
    }

    /**
     * Return a float number between $numberA and $numberB
     *
     * @param float $numberA
     * @param float $numberB
     *
     * @return float
     */
    private function generateRandomFloatBetweenNumbers(
        float $numberA,
        float $numberB
    ) : float {
        return rand($numberA, ($numberB * 10)) / 10;
    }
}
