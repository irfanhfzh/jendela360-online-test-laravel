<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'status' => 'Belum diproses',
        ]);
        DB::table('statuses')->insert([
            'status' => 'Sedang Konfirmasi',
        ]);
        DB::table('statuses')->insert([
            'status' => 'Cicilan',
        ]);
        DB::table('statuses')->insert([
            'status' => 'Lunas',
        ]);
    }
}
