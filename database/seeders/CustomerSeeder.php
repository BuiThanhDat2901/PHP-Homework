<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('customers')->truncate();
        \Illuminate\Support\Facades\DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'Dat',
                'address' => 'HN'
            ],
            [
                'id' => 2,
                'name' => 'Bach',
                'address' => 'HN'
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
