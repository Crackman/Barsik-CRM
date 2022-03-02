<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    static $order_types = [
        'Платный',
        'По гарантии'
    ];

    public function run()
    {
        foreach (self::$order_types as $type) {
            DB::table('order_types')->insert([
                'name' => $type
            ]);
        }
    }
}
