<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'category_id' => \App\Category::inRandomOrder()->first()->id,
        'title' => $faker->company(),
        'photo' => '/images/products/p' . $faker->numberBetween($min = 1, $max = 9) . '.jpg',
        'small_description' => $faker->text($maxNbChars = 200),
        'description' => $faker->text($maxNbChars = 500),
        'config_1' => $faker->word,
        'price_1' => $faker->numberBetween($min = 100, $max = 200),
        'config_2' => $faker->word,
        'price_2' => $faker->numberBetween($min = 200, $max = 300),
        'config_3' => $faker->word,
        'price_3' => $faker->numberBetween($min = 300, $max = 400),
        'config_4' => $faker->word,
        'price_4' => $faker->numberBetween($min = 400, $max = 500),
        'config_5' => $faker->word,
        'price_5' => $faker->numberBetween($min = 500, $max = 600),
        'views' => $faker->numberBetween($min = 100, $max = 500),
    ];
});
