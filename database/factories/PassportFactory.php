<?php

namespace Database\Factories;

use App\Models\Counterparty;
use Illuminate\Database\Eloquent\Factories\Factory;

class PassportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'counterparty_id' => rand(1, Counterparty::all()->count()),
            'series' => $this->faker->numberBetween(100000000000,999999999999),
            'issued_by' => $this->faker->name(),
            'department_code' => $this->faker->numberBetween(100000000000,999999999999),
            'date_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'date_issue' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'place_birth' => $this->faker->address(),
            'inn' => $this->faker->numberBetween(10000000000000,99999999999999),
        ];
    }
}
