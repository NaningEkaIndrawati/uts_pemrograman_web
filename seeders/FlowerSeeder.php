<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flower;

class FlowerSeeder extends Seeder
{
    public function run()
    {
        Flower::create([
            'name' => 'Mawar Merah',
            'description' => 'Bunga mawar merah segar',
            'price' => 15.99,
            
        ]);

    }
}
