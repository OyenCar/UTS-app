<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class CustomerFactory extends Factory
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
            'customer_id' => fake()->unique()->numerify(),
            'first_name'=> fake()->userName(),
            'last_name' => fake()->userName(),
            'email_address' => fake()->email()

        ];
    }
}
