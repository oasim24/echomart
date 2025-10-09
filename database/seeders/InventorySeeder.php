<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;
use App\Models\Warehouse;
use Faker\Factory as Faker;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

       
        $warehouses = Warehouse::all();

        if ($warehouses->count() === 0) {
            $this->command->warn('⚠️ No warehouses found. Run WarehouseSeeder first!');
            return;
        }

      
        for ($i = 1; $i <= 10; $i++) {
            Inventory::create([
                'warehouse_id' => $warehouses->random()->id,
                'name'         => $faker->words(2, true),  
                'price'        => $faker->randomFloat(2, 100, 5000), 
                'stock'        => $faker->numberBetween(5, 100),
            ]);
        }
    }
}
