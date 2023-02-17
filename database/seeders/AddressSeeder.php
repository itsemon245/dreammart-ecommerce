<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = [
            'emon' => [
                'house' => null,
                'user_id' => 1,
                'street' => null,
                'upzilla' => 'Sitakunda',
                'city' => 'Chattagram',
                'state' => 'Chattagram',
                'country' => 'Bangladesh',
                'tag' => 'shipping',
            ],
            'emon2' => [
                'house' => null,
                'user_id' => 1,
                'street' => null,
                'upzilla' => 'Sitakunda',
                'city' => 'Chattagram',
                'state' => 'Chattagram',
                'country' => 'Bangladesh',
                'tag' => 'billing',
            ],
            'joynal' => [
                'house' => null,
                'user_id' => 2,
                'street' => null,
                'upzilla' => 'Khulshi',
                'city' => 'Chattagram',
                'state' => 'Chattagram',
                'country' => 'Bangladesh',
                'tag' => 'shipping',
            ],
            'joynal2' => [
                'house' => null,
                'user_id' => 2,
                'street' => null,
                'upzilla' => 'Khulshi',
                'city' => 'Chattagram',
                'state' => 'Chattagram',
                'country' => 'Bangladesh',
                'tag' => 'billing',
            ],
        ];
        foreach ($addresses as $address) {
            Address::create([
                'house' => $address['house'],
                'user_id' => $address['user_id'],
                'street' => $address['street'],
                'upzilla' => $address['upzilla'],
                'city' => $address['city'],
                'state' => $address['state'],
                'country' => $address['country'],
                'tag' => $address['tag'],
            ]);
        }
    }
}
