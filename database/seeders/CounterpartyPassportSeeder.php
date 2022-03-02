<?php

namespace Database\Seeders;

use App\Models\Counterparty;
use App\Models\Passport;
use Illuminate\Database\Seeder;

class CounterpartyPassportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Counterparty::factory(30)->create()->each(function ($counterparty) {
            $counterparty->passport()->saveMany(Passport::factory(1)->make());
        });
    }

}
