<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $n=[
            ['name'=>'New'],
            ['name'=>'Processing'],
            ['name'=>'Shipped'],
            ['name'=>'Delivered'],
            ['name'=>'Cancel'],
        ];
        DB::table('shipping_statuses')->insert($n);
    }
}
