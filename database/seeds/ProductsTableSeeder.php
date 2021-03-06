<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            Product::create([
                "name" => $faker->sentence(2),
                "slug" => $faker->sentence(3),
                "description" => $faker->sentence(10),
                "price" => $faker->numberBetween(100, 100000),
                "image" => "https://via.placeholder.com/250x300"
            ]);
        }
    }
}
