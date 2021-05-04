<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\LevelSeeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\DataMobilSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            DataMobilSeeder::class,
            LevelSeeder::class,
            StatusSeeder::class,
            UserSeeder::class,
        ]);
    }
}
