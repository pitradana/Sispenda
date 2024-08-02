<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiswaMatapelajaran>
 */
class SiswaMatapelajaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $siswa_id = $this->faker->numberbetween(1, \App\Models\Siswa::count());

        $kelas_siswa_id = \App\Models\Siswa::find($siswa_id)->kelas_id;

        $array_matapelajaran = \App\Models\Matapelajaran::where('kelas_id', $kelas_siswa_id)->get('id');

        return [
            'siswa_id' => $siswa_id,
            'matapelajaran_id' => $this->faker->randomElement($array_matapelajaran),
        ];
    }
}
