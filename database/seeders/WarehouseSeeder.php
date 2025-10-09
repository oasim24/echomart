<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Warehouse;
use Faker\Factory as Faker;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            Warehouse::create([
                'name'    => 'Warehouse ' . $i,
                'phone'   => $faker->phoneNumber(),
                'email'   => $faker->unique()->safeEmail(),
                'address' => $faker->address(),
                'photo'   => 'warehouse_' . $i . '.jpg',
            ]);
        }
    }
}
