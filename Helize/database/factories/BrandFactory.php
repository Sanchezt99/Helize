<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'idBrand' => $faker->unique()->randomDigit,
        'brand' => $faker->randomElement($array =["Gef","Punto Blanco","Tennis","Bershka","Forever21","Cacharreria","EL hueco"]),
    ];
});
