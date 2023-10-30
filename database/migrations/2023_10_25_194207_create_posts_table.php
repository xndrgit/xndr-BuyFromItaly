<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('cover')->default('no_image.jpg');; //'cover' column for image URL
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2); // 10 digits in total with 2 decimal places
            $table->decimal('promo_price', 10, 2)->nullable(); // Optional promo price
            $table->string('shop_link')->nullable(); // Optional shop link
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
