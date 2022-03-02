<?php

namespace Database\Seeders;

use App\Models\GroupProduct;
use Illuminate\Database\Seeder;

class GroupProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GroupProduct::factory(20)->create();
    }
}
