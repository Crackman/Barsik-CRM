<?php

namespace Database\Factories;

use App\Models\GroupProduct;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'group_product_id' => rand(1, GroupProduct::all()->count()),
            'unit_id' => rand(1, Unit::all()->count()),
            'purchase_price' => $this->faker->numberBetween(0, 3000),
            'retail_price' => $this->faker->numberBetween(0, 3000),
            'repair_price' => $this->faker->numberBetween(0, 3000),
            'min_balance' => $this->faker->numberBetween(0, 300),
            'photo' => $this->faker->image('public'),
            'warranty' => $this->faker->numberBetween(0, 200),
        ];
    }
}
