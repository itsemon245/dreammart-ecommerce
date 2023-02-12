<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Default Product 1',
                'slug' => 'Default Product 1',
                'price' => 29.59,
                'discount' => 12,
                'in_stock' => 25,
                'category_id' => 1,
                'brand_id' => 1,
                'event_id' => 1,
                'image' => 'uploads/products/default-product-1.png'
            ],
            [
                'name' => 'Default Product 2',
                'slug' => 'Default Product 2',
                'price' => 35.59,
                'discount' => 15,
                'in_stock' => 21,
                'category_id' => 2,
                'brand_id' => 2,
                'event_id' => 2,
                'image' => 'uploads/products/default-product-2.png'
            ],
            [
                'name' => 'Default Product 3',
                'slug' => 'Default Product 3',
                'price' => 39.99,
                'discount' => 16,
                'in_stock' => 30,
                'category_id' => 3,
                'brand_id' => 3,
                'event_id' => 3,
                'image' => 'uploads/products/default-product-3.png'
            ],
            [
                'name' => 'Default Product 4',
                'slug' => 'Default Product 4',
                'price' => 29.59,
                'discount' => 12,
                'in_stock' => 25,
                'category_id' => 4,
                'brand_id' => 1,
                'event_id' => 1,
                'image' => 'uploads/products/default-product-4.png'
            ],
            [
                'name' => 'Default Product 5',
                'slug' => 'Default Product 5',
                'price' => 30,
                'discount' => 10,
                'in_stock' => 11,
                'category_id' => 2,
                'brand_id' => 2,
                'event_id' => 2,
                'image' => 'uploads/products/default-product-5.png'
            ],
            [
                'name' => 'Default Product 6',
                'slug' => 'Default Product 6',
                'price' => 40,
                'discount' => 20,
                'in_stock' => 21,
                'category_id' => 3,
                'brand_id' => 3,
                'event_id' => 3,
                'image' => 'uploads/products/default-product-6.png'
            ],
        ];
        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'slug' => str()->slug($product['name']),
                'price' => $product['price'],
                'discount' => $product['discount'],
                'in_stock' => $product['in_stock'],
                'category_id' => $product['category_id'],
                'brand_id' => $product['brand_id'],
                'event_id' => $product['event_id'],
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, delectus',
                'image' => $product['image'],
            ]);
        }
    }
}
