<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
    return [
        'reference' => $faker->unique()->randomDigit(),
        'name' => $faker->name,
        'observations' => $faker->text,
        'price' => $faker->randomFloat(),
        'tax' => $faker->randomNumber(1),
        'amount' => $faker->randomNumber(3),
        'status' => Arr::random(Product::availableValues()),
        'file' => "product_default.jpg",

    ];
});
