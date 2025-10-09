<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Review;
use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
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

            Review::create([
                'product_id' => $product->id,
                'rating'     => $faker->numberBetween(1, 5), 
                'comment'    => $faker->sentence(12),
            ]);
        }
    }
}
