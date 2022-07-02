<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'absensis';

    public function jam()
    {
        return $this->hasOne(Jam::class, 'jam_id', 'id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id', 'siswa_id');
    }
}
