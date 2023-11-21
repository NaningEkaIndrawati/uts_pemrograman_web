<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        
        Customer::create([
            'name' => 'Nama Pelanggan',
            'email' => 'email@example.com',
            'phone_number' => '082333063507'
        ]);
    }
}
