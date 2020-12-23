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

        for ($i = 0; $i < 50; $i++) {
            Product::create([
                "name" => $faker->word,
                "slug" => $faker->sentence(3),
                "description" => $faker->sentence(10),
                "price" => $faker->numberBetween(100, 100000),
                "image" => "https://via.placeholder.com/225x275"
            ]);
        }
    }
}
