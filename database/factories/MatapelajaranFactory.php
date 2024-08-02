<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matapelajaran>
 */
class MatapelajaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $daftar_matapelajaran = ["Metematika","Bahasa Indonesia","Bahasa Inggris","IPA","IPS","Informatika","Pendidikan Agama","PJOK","Seni Budaya","Pkn"];
        $kelas_id = $this->faker->numberBetween(1, \App\Models\Kelas::count());
        $array_guru = \App\Models\Guru::where('kelas_id',$kelas_id)->get('id');

        return [
            'kode_mapel' => $this->faker->unique()->numerify('####'),
            'nama' => $this->faker->unique()->randomElement($daftar_matapelajaran),
            'keterangan' => $this->faker->sentence(),
            'kelas_id' => $kelas_id,
            'guru_id' => $this->faker->randomElement($array_guru),
        ];
    }
}
