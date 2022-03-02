<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    static $device_statuses = [
        'Новый',
        'На ремонте',
        'На согласовании',
        'Готов',
        'Выдан'
    ];

    public function run()
    {
        foreach (self::$device_statuses as $status) {
            DB::table('device_statuses')->insert([
                'name' => $status
            ]);
        }
    }
}
