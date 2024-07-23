<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $daftar_title =["S.Pd","M.Pd","M.T","M.Ag","S.Ag"];
        
        return [
            'nip' => $this->faker->unique()->numerify('##################'),
            'nik' => $this->faker->unique()->numerify('################'),
            'nama' => $this->faker->firstName() . ' ' . $this->faker->lastName()." ".
                $this->faker->randomElement($daftar_title),
            'tempat_lahir' => $this->faker->city(),
            'tanngal_lahir' => $this->faker->date(),
            'jk' => $this->faker->randomElement(['L','P']),
            'agama' => $this->faker->randomElement(['Islam','Kristen','Katolik','Hindu','Budha']),
            'no_telp' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'golongan' => $this->faker->randomElement(['IV/a','IV/b','IV/c','IV/d','IV/e']),
            'tmt' => $this->faker->date(),
            'tahun_pengangkatan' => $this->faker->date(),
            'masa_kerja' => $this->faker->date(),
            'mulai_smp' => $this->faker->date(),
            'pendidikan' => $this->faker->randomElement(['SD','SMP','SMA','SMK']),
        ];
    }
}
