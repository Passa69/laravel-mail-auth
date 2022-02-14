<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Videogame;
use Faker\Generator as Faker;

$factory->define(Videogame::class, function (Faker $faker) {
    return [
        'title' => $faker -> words(2, true),
        'subtitle' => $faker -> words(3, true),
        'rating' => $faker -> numberBetween(0, 5),
    ];
});
