<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Channel;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Channel::create([
                'channel_id' => $i + 1,
                'ChannelName' => $faker->name(),
                'descripion' => $faker->sentence(),
                'subscriberscount' => $faker->numberBetween(100, 500),
                'URL' => $faker->url(),
            ]);
        }
        //
    }
}
