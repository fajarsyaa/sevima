<?php

namespace Database\Seeders;

use App\Models\Kelas as ModelsKelas;
use Illuminate\Database\Seeder;

class Kelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsKelas::created([
            'kelas' => 10
        ]);
        ModelsKelas::created([
            'kelas' => 11
        ]);
        ModelsKelas::created([
            'kelas' => 12
        ]);
    }
}
