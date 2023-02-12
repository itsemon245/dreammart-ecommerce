<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'name' => 'Default 1',
                'logo' => 'none',
            ],
            [
                'name' => 'Default 2',
                'logo' => 'none',
            ],
            [
                'name' => 'Default 3',
                'logo' => 'none',
            ],
        ];
        foreach ($brands as $brand) {
            Brand::create([
                'name' => $brand['name'],
                'logo' => $brand['logo']
            ]);
        }
    }
}
