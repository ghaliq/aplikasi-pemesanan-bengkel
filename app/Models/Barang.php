<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'id';
    public $incrementing = false; // Non-incrementing ID
    protected $fillable = [
        'id',
        'nama_barang',
        'merek',
        'harga',
        'stok',
        'satuan',
    ];

    // Override method untuk menyimpan ID acak
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            if (!$model->id) {
                $model->id = self::generateRandomId();
            }
        });
    }

    // Method untuk generate ID acak
    public static function generateRandomId()
    {
        // Generate random 6-digit number
        $randomNumber = mt_rand(100000, 999999);
        // Check if the ID already exists, generate again if it does
        while (self::where('id', $randomNumber)->exists()) {
            $randomNumber = mt_rand(100000, 999999);
        }
        return $randomNumber;
    }

    public function supplier()
    {
        return $this->hasMany(Supplier::class, 'id_barang'); // Relasi one-to-many dengan tabel supplier
    }
}
