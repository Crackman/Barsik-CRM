<?php

namespace Database\Factories;

use App\Models\Posting;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostingProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'posting_id' => rand(1, Posting::all()->count()),
            'product_id' => rand(1, Product::all()->count()),
            'count' =>$this->faker->numberBetween(1,1000),
        ];
    }
}
