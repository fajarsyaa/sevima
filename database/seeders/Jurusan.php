<?php

namespace Database\Seeders;

use App\Http\Controllers\JurusanController;
use App\Models\Jurusan as ModelsJurusan;
use Illuminate\Database\Seeder;

class Jurusan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsJurusan::create([
            'nama_jurusan' => 'REKAYASA PERANGKAT LUNAK',
            'kode_jurusan' => 'RPL',
        ]);

        JurusanController::create([
            'nama_jurusan' => 'ANIMASI',
            'kode_jurusan' => 'ANM',
        ]);
    }
}
