<?php

namespace Database\Seeders;

use App\Models\GroupWork;
use Illuminate\Database\Seeder;

class GroupWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GroupWork::factory(20)->create();
    }
}
