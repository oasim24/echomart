<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $parentCategories = [
            ['name' => 'Electronics', 'photo' => 'electronics.jpg'],
            ['name' => 'Fashion', 'photo' => 'fashion.jpg'],
            ['name' => 'Home & Kitchen', 'photo' => 'home_kitchen.jpg'],
            ['name' => 'Beauty & Health', 'photo' => 'beauty_health.jpg'],
            ['name' => 'Sports & Outdoors', 'photo' => 'sports_outdoors.jpg'],
        ];

        foreach ($parentCategories as $parent) {
            Category::create([
                'name' => $parent['name'],
                'photo' => $parent['photo'],
                'parent_id' => null,
            ]);
        }

      
        $childCategories = [
            ['name' => 'Mobiles', 'photo' => 'mobiles.jpg', 'parent_id' => 1],
            ['name' => 'Laptops', 'photo' => 'laptops.jpg', 'parent_id' => 1],
            ['name' => 'Men Clothing', 'photo' => 'men_clothing.jpg', 'parent_id' => 2],
            ['name' => 'Kitchen Tools', 'photo' => 'kitchen_tools.jpg', 'parent_id' => 3],
            ['name' => 'Fitness Equipment', 'photo' => 'fitness.jpg', 'parent_id' => 5],
        ];

        foreach ($childCategories as $child) {
            Category::create([
                'name' => $child['name'],
                'photo' => $child['photo'],
                'parent_id' => $child['parent_id'],
            ]);
        }
    }
}
