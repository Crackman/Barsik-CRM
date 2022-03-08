<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        $this->call([
            //DeviceCategorySeeder::class,
            BrandDeviceModelSeeder::class,
            DeviceStatusSeeder::class,
            OrderTypeSeeder::class,
            DeviceSeeder::class,

            GroupProductSeeder::class,
            GroupWorkSeeder::class,
            UnitSeeder::class,
            ProductSeeder::class,
            WorkSeeder::class,

            CounterpartyTypeSeeder::class,
            GroupCounterpartySeeder::class,
            RespectSeeder::class,
            CounterpartyPassportSeeder::class,

            StoreSeeder::class,
            //PostingSeeder::class,
            //PostingProductSeeder::class,
        ]);
        //\App\Models\User::factory(10)->create();
        //\App\Models\Orders\Device::factory(5)->create();
    }
}
