<?php

namespace Database\Seeders;

use App\Models\Ruangkelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RuangkelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        RuangKelas::create([
            'kode_ruangkelas' => '7A',
            'nama' => 'Ruang 7A',
            'daya_tampung' => 32,
            'kelas_id' => 1,
            'guru_id' => $faker->unique()->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '7B',
            'nama' => 'Ruang 7B',
            'daya_tampung' => 32,
            'kelas_id' => 1,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '7C',
            'nama' => 'Ruang 7C',
            'daya_tampung' => 32,
            'kelas_id' => 1,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '7D',
            'nama' => 'Ruang 7D',
            'daya_tampung' => 32,
            'kelas_id' => 1,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '7E',
            'nama' => 'Ruang 7E',
            'daya_tampung' => 32,
            'kelas_id' => 1,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '8A',
            'nama' => 'Ruang 8A',
            'daya_tampung' => 32,
            'kelas_id' => 2,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '8B',
            'nama' => 'Ruang 8B',
            'daya_tampung' => 32,
            'kelas_id' => 2,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '8C',
            'nama' => 'Ruang 8C',
            'daya_tampung' => 32,
            'kelas_id' => 2,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '8D',
            'nama' => 'Ruang 8D',
            'daya_tampung' => 32,
            'kelas_id' => 2,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '8E',
            'nama' => 'Ruang 8E',
            'daya_tampung' => 32,
            'kelas_id' => 2,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '9A',
            'nama' => 'Ruang 9A',
            'daya_tampung' => 32,
            'kelas_id' => 3,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '9B',
            'nama' => 'Ruang 9B',
            'daya_tampung' => 32,
            'kelas_id' => 3,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '9C',
            'nama' => 'Ruang 9C',
            'daya_tampung' => 32,
            'kelas_id' => 3,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '9D',
            'nama' => 'Ruang 9D',
            'daya_tampung' => 32,
            'kelas_id' => 3,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);

        RuangKelas::create([
            'kode_ruangkelas' => '9E',
            'nama' => 'Ruang 9E',
            'daya_tampung' => 32,
            'kelas_id' => 3,
            'guru_id' => $faker->numberBetween(1, \App\Models\Guru::count()),
        ]);
    }
}
