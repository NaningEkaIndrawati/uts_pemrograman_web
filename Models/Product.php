<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'nama', 'deskripsi', 'harga'
        // Kolom lain yang ingin diisi secara massal
    ];

    // Contoh relasi dengan model lain
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

