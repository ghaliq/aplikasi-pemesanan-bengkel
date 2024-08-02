<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pegawai extends Authenticatable
{
    use Notifiable;

    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';

    protected $fillable = [
        'id_pegawai',
        'nama_pegawai',
        'alamat',
        'jenis_kelamin',
        'jabatan',
        'status',
    ];

    public function keluhan()
    {
        return $this->hasMany(Keluhan::class, 'id_pegawai');
    }
}
