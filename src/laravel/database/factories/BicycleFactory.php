<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bicycle;
use Faker\Generator as Faker;

$factory->define(Bicycle::class, function (Faker $faker) {
    return [
        'brand' => $faker->domainName(),
        'model' => $faker->text,
        'color' => $faker->colorName(),
        'price' => $faker->randomNumber(5),
    ];
});
