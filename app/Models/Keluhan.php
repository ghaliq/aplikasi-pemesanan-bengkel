<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    protected $table = 'keluhan';

    protected $primaryKey = 'id_keluhan';

    protected $fillable = [
        'id_keluhan',
        'nama_keluhan',
        'ongkos',
        'no_pol',
        'customer_id',
        'pegawai_id'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'no_pol', 'no_pol');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
}
