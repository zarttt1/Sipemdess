<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
    protected $table = 'masyarakat';

    protected $fillable = [
        'nik', 'nama', 'username', 'password', 'telp',
    ];

    protected $hidden = ['password'];

    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class, 'id_masyarakat');
    }
}
