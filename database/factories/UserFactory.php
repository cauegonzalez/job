<?php

use Faker\Generator as Faker;
use Faker\Provider\Address as Address;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'city' => $faker->city,
        'state' => $faker->state,
        'postal_code' => $faker->numberBetween(10000000, 99999999),
        'address' => $faker->sentence,
        'number' => $faker->numberBetween(1, 9999),
        'complement' => $faker->word,
        'district' => $faker->name,
        'remember_token' => str_random(10),
    ];
});
