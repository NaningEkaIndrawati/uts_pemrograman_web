<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'flower_id', 'customer_name', 'customer_email', 'message'
    ];

    public function flower()
    {
        return $this->belongsTo(Flower::class);
    }
}