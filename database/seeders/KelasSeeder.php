<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'kode_kelas' => '7',
            'nama' => 'Kelas 7',
        ]);

        Kelas::create([
            'kode_kelas' => '8',
            'nama' => 'Kelas 8',
        ]);

        Kelas::create([
            'kode_kelas' => '9',
            'nama' => 'Kelas 9',
        ]);
    }
}
