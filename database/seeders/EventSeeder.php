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
                'tagline' => 'Live Your Dreams',
            ],
            [
                'name' => 'Most Popular',
                'tagline' => 'Chosen By People',
            ],
            [
                'name' => 'Special Deals',
                'tagline' => 'Our Recommendation',
            ],
        ];
        foreach ($events as $event) {
            Event::create([
                'name' => $event['name'],
                'tagline' => $event['tagline']
            ]);
        }
    }
}
