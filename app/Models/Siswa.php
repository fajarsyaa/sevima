<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Js;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function absen()
    {
        return $this->hasMany(Absensi::class, 'id_siswa', 'id');
    }

    function jurusan()
    {
        return $this->hasOne(Jurusan::class, 'id', 'jurusan');
    }

    function kelas()
    {
        return $this->hasOne(kelas::class, 'id', 'kelas');
    }
}
