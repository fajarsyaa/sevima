<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function absen()
    {
        return $this->hasMany(Absensi::class, 'id_siswa', 'absen');
    }
}
