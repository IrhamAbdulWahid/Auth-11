<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santriS';
    protected $fillable = [
        'nama',
        'ttl',
        'jenis_kelamin',
        'anak_ke',
        'alamat',
        'asal_sekolah',
    ];
}
