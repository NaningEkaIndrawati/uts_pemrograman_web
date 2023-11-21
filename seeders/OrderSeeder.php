<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        // Contoh data yang ingin dimasukkan ke dalam tabel Order
        Order::create([
            'flower_id' => 1,
            'customer_name' => 'Nama Pelanggan',
            'customer_email' => 'email@example.com',
            'message' => 'Pesan tambahan',
        ]);
    }
}