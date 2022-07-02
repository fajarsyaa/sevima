<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->unique()->name(),
            'agama' => "islam",
            'tempat_lahir' => "mjk",
            'tanggal_lahir' => "2003-09-09",
            'tahun_masuk' => "2003-09-09",
            'jenis_kelamin' => "lk",
            'phone' => "23456789",
            'jurusan_id' => rand(1, 4),
            'alamat' => "klgr",
            'kelas_id' => rand(1, 3),
            'nis' => $this->faker->unique()->numberBetween(100000, 90000000)

        ];
    }
}
