<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'product '.$i+1,
                'qty' => rand(40,100),
                'price' => rand(400, 500),
                'description' => 'description '.$i+1,
            ]);
        }
    }
}
