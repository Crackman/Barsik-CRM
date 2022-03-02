<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CounterpartyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static $counterparty_types = [
        'Частное лицо',
        'Компания'
    ];

    public function run()
    {
        foreach (self::$counterparty_types as $type) {
            DB::table('counterparty_types')->insert([
                'name' => $type,
            ]);
        }
    }
}
