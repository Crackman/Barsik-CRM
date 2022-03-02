<?php

namespace Database\Seeders;

use App\Models\PostingProduct;
use Illuminate\Database\Seeder;

class PostingProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostingProduct::factory(300)->create();
    }
}
