<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Echomart',
            'email' => 'info@echomart.com',
        ]);




         $this->call([
        CategorySeeder::class,
        BrandSeeder::class,
        WarehouseSeeder::class,
         InventorySeeder::class,
         ProductSeeder::class,
          ProductImageSeeder::class,
          ReviewSeeder::class,
    ]);
    }
}
