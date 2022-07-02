<?php

namespace Database\Seeders;

use App\Models\Absensi;
use App\Models\coment;
use App\Models\Jam;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\post;
use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fajar',
            'email' => 'Fajar@gmail.com',
            'password' => Hash::make('user123'),
            'level' => 'siswa',
            'siswa_id' => '1',
            'kelas_id' => '3',
            'jurusan_id' => '1',
        ]);

        User::create([
            'name' => 'Irfani yusuf',
            'email' => 'irfan@gmail.com',
            'password' => Hash::make('user123'),
            'level' => 'guru',
            'nip' => 787126576758564755
        ]);

        \App\Models\Siswa::factory(800)->create();
        \App\Models\User::factory(798)->create();

        Kelas::create([
            'kelas' => 10
        ]);

        Kelas::create([
            'kelas' => 11
        ]);

        Kelas::create([
            'kelas' => 12
        ]);

        Jurusan::create([
            'nama_jurusan' => 'REKAYASA PERANGKAT LUNAK',
            'kode_jurusan' => 'RPL',
        ]);

        Jurusan::create([
            'nama_jurusan' => 'ANIMASI',
            'kode_jurusan' => 'ANM',
        ]);

        Jurusan::create([
            'nama_jurusan' => 'TEKNIK KOMPUTER  JARINGAN',
            'kode_jurusan' => 'TKJ',
        ]);

        Jurusan::create([
            'nama_jurusan' => 'MULTIMEDIA',
            'kode_jurusan' => 'MM',
        ]);

        Jam::create([
            'type' => "masuk",
            'mulai' => new DateTime('07:00:00'),
            'selesai' => new DateTime('09:00:00'),
        ]);
        Jam::create([
            'type' => "pulang",
            'mulai' => new DateTime('15:00:00'),
            'selesai' => new DateTime('19:00:00'),
        ]);

        Absensi::create([
            'siswa_id' => 1,
            'tanggal' => date('Y-m-d'),
            'jam_id' => 1,
            'ket' => "masuk"
        ]);
        Absensi::create([
            'siswa_id' => 2,
            'tanggal' => date('Y-m-d'),
            'jam_id' => 1,
            'ket' => "masuk"
        ]);
        Absensi::create([
            'siswa_id' => 3,
            'tanggal' => date('Y-m-d'),
            'jam_id' => 1,
            'ket' => "masuk"
        ]);
        Absensi::create([
            'siswa_id' => 4,
            'tanggal' => date('Y-m-d'),
            'jam_id' => 1,
            'ket' => "masuk"
        ]);

        Absensi::create([
            'siswa_id' => 1,
            'tanggal' => date('Y-m-d'),
            'jam_id' => 2,
            'ket' => "pulang"
        ]);
        Absensi::create([
            'siswa_id' => 2,
            'tanggal' => date('Y-m-d'),
            'jam_id' => 2,
            'ket' => "pulang"
        ]);
        Absensi::create([
            'siswa_id' => 3,
            'tanggal' => date('Y-m-d'),
            'jam_id' => 2,
            'ket' => "pulang"
        ]);
        Absensi::create([
            'siswa_id' => 4,
            'tanggal' => date('Y-m-d'),
            'jam_id' => 2,
            'ket' => "pulang"
        ]);
    }
}
