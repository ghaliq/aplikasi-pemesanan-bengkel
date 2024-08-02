<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier'; // Nama tabel di database

    protected $primaryKey = 'id'; // Kolom primary key

    protected $fillable = [
        'id',
        'nama_supplier',
        'alamat',
        'no_hp',
        'id_barang',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang'); // Relasi one-to-many dengan tabel barang
    }
}
