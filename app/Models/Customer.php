<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'customer_id'; // Nama kolom primary key
    public $incrementing = false; // Tidak menggunakan auto-incrementing integer
    protected $keyType = 'string'; // Tipe data primary key

    protected $fillable = [
        'customer_id',
        'nama_customer',
        'alamat',
        'jenis_kelamin',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid(); // Menggunakan UUID sebagai ID
        });
    }

    public function keluhan()
    {
        return $this->hasMany(Keluhan::class, 'customer_id');
    }

    // Getter untuk mengembalikan UUID
    public function getCustomerIdAttribute($value)
    {
        return $value; // Mengembalikan UUID sebagai string
    }
}
