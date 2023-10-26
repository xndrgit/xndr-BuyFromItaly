<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = \App\Models\Category::all();
        $numberOfPosts = 40;
        for ($i = 0; $i < $numberOfPosts; $i++) {

            $newProduct = new \App\Models\Post();
            $newProduct->cover = $faker->imageUrl(640, 480, 'animals', true);
            $newProduct->name = $faker->text(30);
            $newProduct->description = $faker->paragraph;
            $newProduct->price = $faker->randomFloat(2, 10, 1000);
            $newProduct->promo_price = $faker->boolean(30) ? $faker->randomFloat(2, 1, 10) : null;
            $newProduct->shop_link = $faker->url;
            $newProduct->created_at = now();
            $newProduct->updated_at = now();

            $newProduct->category_id = $faker->randomElement($categories)->id;

            $newProduct->save();

        }
    }
}
