<?php

namespace Database\Factories;

use App\Models\Companies;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Companies>
 */
class CompaniesFactory extends Factory
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
            'company_id'=>fake()->unique()->numerify(),
            'company_name'=>fake()->company(),
            'headquarters_phone_number'=>fake()->unique()->numerify('####-####-####'),
        ];
    }
}
