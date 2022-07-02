<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Js;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'siswas';
    // protected $casts = ['kelas' => 'object'];

    public function absens()
    {
        return $this->hasMany(Absensi::class);
    }

    public function jurusan()
    {
        return $this->hasOne(Jurusan::class, 'id', 'jurusan_id');
    }

    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'id', 'kelas_id');
    }
}
