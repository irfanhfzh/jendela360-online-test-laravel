<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'level_id' => '2',
            'name' => 'nama user',
            'email' => 'user@gmail.com',
            'no_hp' => '081234567891',
            'address' => 'Jl. Telaga Mas Blok G5 No.19 Rt016/Rw014',
            'password' => bcrypt('user')
        ]);
        User::create([
            'level_id' => '1',
            'name' => 'nama admin',
            'email' => 'admin@gmail.com',
            'no_hp' => '089629933096',
            'address' => 'Jl. Telaga Mas Blok G2 No.05 Rt013/Rw014',
            'password' => bcrypt('admin')
        ]);
    }
}
