<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupCounterpartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static $group_counterparties = [
        'Покупатель',
        'Поставщик'
    ];

    public function run()
    {
        foreach (self::$group_counterparties as $group) {
            DB::table('group_counterparties')->insert([
                'name' => $group,
            ]);
        }
    }
}
