<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // Import HasMany jika diperlukan untuk relasi dengan Order

class Customer extends Model
{
    protected $fillable = [
        'name', 
        'email', 
        'phone_number', 
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}

