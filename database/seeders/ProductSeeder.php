<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Warehouse;
use App\Models\Inventory;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

       
        $categories = Category::all();
        $brands = Brand::all();
        $warehouses = Warehouse::all();
        $inventories = Inventory::all();

        if ($categories->count() === 0 || $warehouses->count() === 0 || $inventories->count() === 0) {
            $this->command->warn('⚠️ Please seed Categories, Warehouses, and Inventories first!');
            return;
        }

        
        for ($i = 1; $i <= 10; $i++) {
            $category = $categories->random();
            $brand = $brands->random();
            $warehouse = $warehouses->random();
            $inventory = $inventories->random();

            Product::create([
                'category_id'       => $category->id,
                'brand_id'       => $brand->id,
                'warehouse_id'      => $warehouse->id,
                'inventory_id'      => $inventory->id,
                'discount'          => $faker->numberBetween(0, 20),   
                'vat'               => $faker->numberBetween(5, 15),  
                'short_description' => $faker->sentence(8),
                'long_description'  => $faker->paragraph(4),
            ]);
        }
    }
}
