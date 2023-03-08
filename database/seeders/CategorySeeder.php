<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
            ],
            [
                'name' => 'Wearables',
                'slug' => 'wearables',
            ],
            [
                'name' => 'Toys',
                'slug' => 'toys',
            ],
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
            ],
        ];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => $category['slug']
            ]);
        }
    }
}
