<?php

namespace Database\Factories;

use App\Models\CounterpartyType;
use App\Models\GroupCounterparty;
use App\Models\Respect;
use Illuminate\Database\Eloquent\Factories\Factory;

class CounterpartyFactory extends Factory
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
            'counterparty_type_id' => rand(1, CounterpartyType::all()->count()),
            'respect_id' => rand(1, Respect::all()->count()),
            'group_counterparty_id' => rand(1, GroupCounterparty::all()->count()),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'remark' => $this->faker->text($maxNbChars = 50),
        ];
    }
}
