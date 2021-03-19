<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
                'id' => 1,
                'name' => 'Bogotá'
            ],
            [
                'id' => 2,
                'name' => 'Medellin'
            ],
            [
                'id' => 3,
                'name' => 'Cali'
            ],
            [
                'id' => 4,
                'name' => 'Cartagena'
            ]
        ]);
    }
}
