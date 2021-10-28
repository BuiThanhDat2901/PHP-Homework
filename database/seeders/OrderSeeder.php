<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'id' => 1,
                'customer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'id' => 2,
                'customer_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
