<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Slider::create([
            'title' => 'Womens bag collection',
            'text' => 'New and fresh bags collection with 40% OFF',
            'photo' => '/images/slide1.jpg',
            'type' => 1,
        ]);
        \App\Slider::create([
            'title' => 'New wall clock collection',
            'text' => 'New and fresh wall collection with 40% OFF',
            'photo' => '/images/slide2.jpg',
            'type' => 2,
        ]);
        \App\Slider::create([
            'title' => 'Flat 50% off on lamp',
            'text' => 'The best lamp collection on lowest price',
            'photo' => 'images/slide3.jpg',
            'type' => 3,
        ]);
    }
}
