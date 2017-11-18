<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'category_id' => \App\Category::inRandomOrder()->first()->id,
        'title' => $faker->company(),
        'photo' => '/images/products/p'.$faker->numberBetween($min = 1, $max = 9).'.jpg',
        'small_description' => $faker->text($maxNbChars = 200),
        'description' => $faker->text($maxNbChars = 2000),
        'price' => $faker->numberBetween($min = 100, $max = 500),
        'views' => $faker->numberBetween($min = 100, $max = 500),
    ];
});
