<?php

namespace Database\Seeders;

use App\Models\Absensi;
use Illuminate\Database\Seeder;

class Absen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Absensi::create([
            'id_siswa' => 1,
            'tanggal' => date('Y-m-d'),
            'id_jam' => 1,
        ]);
        Absensi::create([
            'id_siswa' => 2,
            'tanggal' => date('Y-m-d'),
            'id_jam' => 1,
        ]);
        Absensi::create([
            'id_siswa' => 3,
            'tanggal' => date('Y-m-d'),
            'id_jam' => 1,
        ]);
        Absensi::create([
            'id_siswa' => 4,
            'tanggal' => date('Y-m-d'),
            'id_jam' => 1,
        ]);

        Absensi::create([
            'id_siswa' => 1,
            'tanggal' => date('Y-m-d'),
            'id_jam' => 2,
        ]);
        Absensi::create([
            'id_siswa' => 2,
            'tanggal' => date('Y-m-d'),
            'id_jam' => 2,
        ]);
        Absensi::create([
            'id_siswa' => 3,
            'tanggal' => date('Y-m-d'),
            'id_jam' => 2,
        ]);
        Absensi::create([
            'id_siswa' => 4,
            'tanggal' => date('Y-m-d'),
            'id_jam' => 2,
        ]);
    }
}
