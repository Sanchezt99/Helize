<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Wear;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Wear::class, function (Faker $faker) {
    return [
        'gender' => $faker->company,
        'color' => $faker->randomElement($array=["Red","Blue","Yellow","Black","Orange","Gray","Green","White"]),
        'brand' => $faker->company,
        'category' => $faker->company,
        'type' => $faker->randomElement($array=["M","F","X"]),
    ];
});

