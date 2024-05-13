<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_customer',
        'alamat',
        'jenis_kelamin',
    ];
}
