<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nisn' => $this->faker->unique()->numerify('##########'),
            'nis' => $this->faker->unique()->numerify('#####'),
            'nama' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'tempat_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->date(),
            'jk' => $this->faker->randomElement(['L','P']),
            'agama' => $this->faker->randomElement(['Islam','Kristen','Katolik','Hindu','Budha']),
            'status_anak' => $this->faker->randomElement(['Kandung','Tiri']),
            'sekolah_asal' => $this->faker->city(),
            'nik' => $this->faker->unique()->numerify('################'),
            'alamat' => $this->faker->address(),
            'kelas_id' => $this->faker->numberBetween(1, 3),
            'ruangkelas_id' => $this->faker->numberBetween(1, 15),
        ];
    }
}
