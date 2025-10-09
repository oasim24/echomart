<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use Faker\Factory as Faker;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

      
        $products = Product::all();

        if ($products->count() === 0) {
            $this->command->warn('⚠️ No products found. Run ProductSeeder first!');
            return;
        }

    
        for ($i = 1; $i <= 10; $i++) {
            $product = $products->random();

            ProductImage::create([
                'product_id'   => $product->id,
                'photo'        => 'uploads/products/photo_' . $i . '.jpg',
                'other_photo'  => $faker->boolean(70) ? 'uploads/products/other_' . $i . '.jpg' : null,
            ]);
        }
    }
}
