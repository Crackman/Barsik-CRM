<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\DeviceCategory;
use App\Models\DeviceModel;
use App\Models\DeviceStatus;
use App\Models\OrderType;
use Illuminate\Database\Eloquent\Factories\Factory;


class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categoryIds = DeviceCategory::all()
            ->pluck('id')
            ->toArray();
        $category_id = rand(1, count($categoryIds));
        $brands_id = DeviceCategory::find($category_id)->brands->pluck('id')->toArray();

        $k = array_rand($brands_id);
        $brand_id = $brands_id[$k];

        $models_id = Brand::find($brand_id)->models->pluck('id')->toArray();
        $k = array_rand($models_id);
        $model_id = $models_id[$k];

        return [
            'device_category_id' => $category_id,
            'brand_id' => $brand_id,
            'device_model_id' => $model_id,
            'device_status_id' => rand(1, DeviceStatus::all()->count()),
            'order_type_id' => rand(1, OrderType::all()->count()),
            'number_mobile' => $this->faker->phoneNumber,
            'defect' => $this->faker->text($maxNbChars = 50),
            'complete_before' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
