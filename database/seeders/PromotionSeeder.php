<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Promotion;

class PromotionSeeder extends Seeder
{
    public function run()
    {
        Promotion::insert([
            ['name' => 'Discount 10%', 'description' => 'Get a 10% discount on all items'],
            ['name' => 'Free Shipping', 'description' => 'Free shipping on orders over $50'],
            ['name' => 'Buy 1 Get 1', 'description' => 'Buy one item, get another one free'],
        ]);
    }
}
