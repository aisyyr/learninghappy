<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LatihanSoal extends Model
{
    protected $table = 'latihansoal';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nama_pengguna',
        'latihan_ke',
        'jenis_bangun',
        'satu1',
        'dua2',
        'tiga3',
        'empat4',
        'lima5',
        'enam6',
        'tujuh7',
        'delapan8',
        'nilai',
    ];
}
