<?php

namespace Database\Seeders;

use App\Helpers\CSV;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = public_path('/imports/products.csv');
        $csv = new CSV($path);
        $results = $csv->parse();
        foreach ($results as $result) {
            Product::create([
                'name' => $result['name'],
                'slug' => $result['slug'],
                'detail' => $result['detail'],
                'price' => $result['price'],
                'discount' => $result['discount'],
                'in_stock' => $result['in_stock'],
                'category_id' => $result['category_id'],
                'brand_id' => $result['brand_id'],
                'event_id' => $result['event_id'],
                'image' => $result['image'],
                'stripe_product_id' => $result['stripe_product_id'],
                'stripe_price_id' => $result['stripe_price_id'],
            ]);
        }
    }
}
