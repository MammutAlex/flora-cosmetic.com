<?php

use Faker\Generator as Faker;

$factory->define(\App\SubCategory::class, function (Faker $faker) {
    return [
        'category_id' => \App\Category::inRandomOrder()->first()->id,
        'title' => $faker->company(),
        'url'=>$faker->slug,
    ];
});
