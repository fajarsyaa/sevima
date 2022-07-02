<?php

namespace Database\Seeders;

use App\Models\Jam as ModelsJam;
use DateTime;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class Jam extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsJam::create([
            'type' => "masuk",
            'mulai' => new DateTime('07:00:00'),
            'selesai' => new DateTime('09:00:00'),
        ]);
        ModelsJam::create([
            'type' => "pulang",
            'mulai' => new DateTime('15:00:00'),
            'selesai' => new DateTime('19:00:00'),
        ]);
    }
}
