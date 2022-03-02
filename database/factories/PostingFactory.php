<?php

namespace Database\Factories;

use App\Models\Counterparty;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'store_id' => rand(1, Store::all()->count()),
            'counterparty_id' => rand(1, Counterparty::all()->count()),
            'incoming_number' => $this->faker->numberBetween(1000000000, 9999999999),
            'acceptance_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'comment' => $this->faker->text($maxNbChars = 100),
        ];
    }
}
