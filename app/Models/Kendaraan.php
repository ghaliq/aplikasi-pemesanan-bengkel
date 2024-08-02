<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $primaryKey = 'no_pol'; // Tetapkan 'no_pol' sebagai primary key

    protected $fillable = [
        'no_pol',
        'no_mesin',
        'merek',
        'warna',
    ];

    public function keluhan()
    {
        return $this->hasMany(Keluhan::class, 'no_pol');
    }
}
