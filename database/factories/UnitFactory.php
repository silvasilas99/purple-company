<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unit>
 */
class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cnpj = $this->generateRandomCNPJ();

        return [
            "fantasy_name" => (string)fake()->company,
            "social_reason" => (string)fake()->name . $cnpj,
            "cnpj" => (string)$cnpj
        ];
    }

    /**
     * Return a 14 numeric-digits string
     *
     * @return string
     */
    private function generateRandomCNPJ () : string
    {
        return
            (string)rand(pow(10, 14-1), pow(10, 14)-1);
    }
}
