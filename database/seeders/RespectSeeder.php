<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static $respects = [
        'Злой',
        'Нормальный',
        'Счастливый'
    ];

    public function run()
    {
        foreach (self::$respects as $respect) {
            DB::table('respects')->insert([
                'name' => $respect,
            ]);
        }
    }
}
