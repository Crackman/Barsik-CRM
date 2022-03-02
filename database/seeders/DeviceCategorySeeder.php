<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    static $device_categories = [
        'Телефон',
        'Ноутбук',
        'Планшет',
        'Другое'
    ];

    public function run()
    {
        foreach (self::$device_categories as $category) {
            DB::table('device_categories')->insert([
                'name' => $category,
            ]);
        }
    }
}
