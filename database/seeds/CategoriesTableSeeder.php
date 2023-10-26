<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = [
            'Sports and Outdoors',
            'Electronics',
            'Clothing',
            'Home and Garden',
            'Toys',
            'Beauty and Health',
        ];

        foreach ($categories as $categoryName) {
            $category = new \App\Models\Category();
            $category->name = $categoryName;
            $category->description = $faker->sentence;
            $category->color = $faker->hexColor;
            $category->created_at = now();
            $category->updated_at = now();
            $category->save();
        }
    }
}
