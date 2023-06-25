<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('stripe_product_id')->nullable();
            $table->text('stripe_price_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->foreignId('category_id')->nullable();
            $table->foreignId('brand_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('favorite_id')->nullable();
            $table->foreignId('cart_id')->nullable();
            $table->foreignId('event_id')->nullable();
            $table->float('price');
            $table->string('image');
            $table->integer('discount');
            $table->integer('in_stock');
            $table->longText('detail');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('products');
    }
};
