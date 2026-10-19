<?php

namespace Database\Factories;

use App\Models\Companies;
use App\Models\Items;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Items>
 */
class ItemsFactory extends Factory
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
            'item_code' => fake()->unique()->numerify("########"),
            'item'=> fake()->name(),
            'unit_price' => fake()->numberBetween(1,10),
            'company_id' => Companies::inRandomOrder()->value('company_id')
        ];
    }
}
