<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Matapelajaran;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->seed(123);

        $this->call(KelasSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(RuangkelasSeeder::class);
        $this->call(MatapelajaranSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(SiswaMatapelajaranSeeder::class);
    }
}
