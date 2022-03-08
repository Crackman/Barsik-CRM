<?php

namespace Database\Factories;

use App\Models\Posting;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostingStoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'posting_id' => rand(1, Posting::all()->count()),
            'store_id' => rand(1, Store::all()->count())
        ];
    }
}
