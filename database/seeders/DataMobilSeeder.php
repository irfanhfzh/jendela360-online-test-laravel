<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataMobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_mobils')->insert([
            'nama' => 'Avanza Hitam',
            'harga' => '50000000',
            'stock' => '15',
        ]);
        DB::table('data_mobils')->insert([
            'nama' => 'Toyota Merah',
            'harga' => '150000000',
            'stock' => '5',
        ]);
        DB::table('data_mobils')->insert([
            'nama' => 'Fortuner Hitam',
            'harga' => '250000000',
            'stock' => '3',
        ]);
    }
}
