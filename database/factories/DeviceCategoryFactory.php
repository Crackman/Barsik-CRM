<?php

namespace Database\Factories;

use App\Models\DeviceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        {
            return [
                'name' => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            ];
        }
    }
}
