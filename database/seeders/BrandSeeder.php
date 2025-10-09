<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $brands = [
            ['Nike', 'nike.png'],
            ['Adidas', 'adidas.png'],
            ['Puma', 'puma.png'],
            ['Under Armour', 'under_armour.png'],
            ['Reebok', 'reebok.png'],
            ['Levi’s', 'levis.png'],
            ['Zara', 'zara.png'],
            ['H&M', 'hm.png'],
            ['Gucci', 'gucci.png'],
            ['Tommy Hilfiger', 'tommy_hilfiger.png'],
        ];

        foreach ($brands as [$name, $photo]) {
            Brand::create([
                'name' => $name,
                'photo' => "brands/$photo",
                
            ]);
        }
    }
}
