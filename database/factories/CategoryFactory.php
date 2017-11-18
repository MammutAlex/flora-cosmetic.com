<?php

use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->jobTitle,
        'photo'=>'/images/products/p'.$faker->numberBetween($min = 1, $max = 9).'.jpg',
        'url'=>$faker->slug,
    ];
});
