<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Wear;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Wear::class, function (Faker $faker) {
    return [
        'idWear' => $faker->unique()->randomDigit,
        'gender' => $faker->randomElement($array=["F","M"]),
        'color' => $faker->randomElement($array=["Red","Blue","Yellow","Black","Orange","Gray","Green","White"]),
        'category' => $faker->company,
        'type' => $faker->randomElement($array=["M","F","X"]),

    ];
});

