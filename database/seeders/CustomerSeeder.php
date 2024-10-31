<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        Customer::insert([
            ['name' => 'Raja', 'email' => 'Rajaaja@gmail.com'],
            ['name' => 'Bange bane', 'email' => 'bane@example.com'],
            ['name' => 'Johnson', 'email' => 'davidjon@example.com'],
        ]);
    }
}
