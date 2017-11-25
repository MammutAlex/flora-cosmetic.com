<?php

use Faker\Generator as Faker;

$factory->define(\App\Delivery::class, function (Faker $faker) {
    return [
        'title' => $faker->text(25),
        'text' => $faker->realText(500),
    ];
});
