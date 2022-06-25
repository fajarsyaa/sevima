<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function jam()
    {
        return $this->hasOne(Jam::class, 'id_jam', 'id');
    }

    function siswa()
    {
        return $this->hasOne(Siswa::class, 'id', 'id_siswa');
    }
}
