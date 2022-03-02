<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\DeviceCategory;
use App\Models\DeviceModel;
use Illuminate\Database\Seeder;

class BrandDeviceModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DeviceCategory::factory(5)->create()->each(function ($category) {
            $category->brands()->saveMany(Brand::factory(5)->create()->each(function($brand) {
                $brand->models()->saveMany(DeviceModel::factory(10)->make());
            }));
        });


    }
}
