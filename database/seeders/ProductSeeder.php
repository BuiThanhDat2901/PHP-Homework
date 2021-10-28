<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => 1,
                'price' => 10000,
                'name' => 'Test'
            ],
            [
                'id' => 2,
                'price' => 20000,
                'name' => 'Test2'
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
