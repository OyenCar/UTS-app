<?php

namespace Database\Factories;

use App\Models\Sales;
use App\Models\Customers;
use App\Models\Items;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sales>
 */
class SalesFactory extends Factory
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
            'purchase_number' => fake()->unique()->numerify("Sale-###"),
            'date_of_purchase'=> fake()->date(),
            'customer_id'=> Customers::inRandomOrder()->value('customer_id'),
            'item_code'=>Items::inRandomOrder()->value('item_code'),
        ];
    }
}
