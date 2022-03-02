<?php

namespace Database\Factories;

use App\Models\GroupWork;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
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
            'repair_price' => $this->faker->numberBetween(1, 30000),
            'cost_price' => $this->faker->numberBetween(1, 30000),
            'group_work_id' => rand(1, GroupWork::all()->count()),
            'warranty' => $this->faker->numberBetween(0, 200),
            'salary' => $this->faker->numberBetween(0, 20000),
            'comment' => $this->faker->text($maxNbChars = 100),
        ];
    }
}
