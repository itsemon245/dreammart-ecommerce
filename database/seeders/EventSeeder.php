<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'name' => 'New Arrivals',
                'slug' => 'new-arrivals',
                'tagline' => 'Live Your Dreams',
            ],
            [
                'name' => 'Most Popular',
                'slug' => 'popular',
                'tagline' => 'Chosen By People',
            ],
            [
                'name' => 'Special Deals',
                'slug' => 'special',
                'tagline' => 'Our Recommendation',
            ],
        ];
        foreach ($events as $event) {
            Event::create([
                'name' => $event['name'],
                'slug' => $event['slug'],
                'tagline' => $event['tagline']
            ]);
        }
    }
}
