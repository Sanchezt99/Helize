<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Wear;
use Faker\Generator as Faker;

$factory->define(Wear::class, function (Faker $faker) {
    return [
        'gender' => $faker->randomElement(["F","M","X"]),
        'color' => $faker->randomElement(["Red","Blue","Yellow","Black","Orange","Gray","Green","White"]),
        'category' => $faker->company,
        'type' => $faker->randomElement(["Shoes","Jean","Shirt"]),
        'brand' => $faker->randomElement(["Nike","Adidas","Tennis","Forever 21","Lili pink"]),
        'price' => $faker->numberBetween($min = 1000, $max = 99999),
    ];
});

