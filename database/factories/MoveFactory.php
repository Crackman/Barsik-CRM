<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Move>
 */
class MoveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'from_store_id' => rand(1, Store::all()->count()),
            'to_store_id' => rand(1, Store::all()->count()),
            'summa' => $this->faker->numberBetween(1, 20000),
            'comment' => $this->faker->sentence($nbWords = 2),
            'created_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
