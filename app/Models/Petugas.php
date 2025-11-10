<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    protected $table = 'petugas';

    protected $fillable = [
        'nama_petugas', 'username', 'password', 'telp', 'level',
    ];

    protected $hidden = ['password'];

    public function tanggapan()
    {
        return $this->hasMany(Tanggapan::class, 'id_petugas');
    }
}
