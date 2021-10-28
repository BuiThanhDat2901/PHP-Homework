<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('order_details')->truncate();
        \Illuminate\Support\Facades\DB::table('order_details')->insert([
            [
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 10,
                'unit_price' => 10000,

            ],
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 10,
                'unit_price' => 20000,

            ],
            [
                'order_id' => 2,
                'product_id' => 2,
                'quantity' => 20,
                'unit_price' => 20000,

            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
