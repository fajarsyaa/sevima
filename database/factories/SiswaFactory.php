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
            'name' => "fajar syaihu",
            'agama' => "islam",
            'tempat_lahir' => "mjk",
            'tanggal_lahir' => "2003-09-09",
            'tahun_masuk' => "2003-09-09",
            'jenis_kelamin' => "lk",
            'phone' => "23456789",
            'jurusan' => "RPL",
            'alamat' => "klgr",
            'kelas' => "1",
            'absen' => "1",
            'nis' => "123456789"

        ];
    }
}
